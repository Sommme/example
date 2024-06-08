<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibition;
use Illuminate\Support\Facades\Auth;

class ExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function get_welcome_index(){
        $exhibitions = Exhibition::with(['schedules' => function ($query) {
            $query->orderBy('start_datetime', 'asc');
        }])->get();
    
        // Обновляем статус каждого расписания
        foreach ($exhibitions as $exhibition) {
            foreach ($exhibition->schedules as $schedule) {
                $schedule->updateStatus();
            }
        }

        return view('welcome', compact('exhibitions'));
     }

    public function exhibitions_curator_index()
    {
        $user = Auth::user();
        $exhibitions = Exhibition::where('user_id', $user->id)->paginate(5);;

        return view('exhibitions_curator', compact('exhibitions'));
    }

    public function create(Request $request) {

    }

    public function delete_exhibition($id)
    {
        $exhibition = Exhibition::findOrFail($id);

        if ($exhibition->user_id == Auth::id()) {
            $exhibition->delete();
            return redirect()->back()->with('success', 'Exhibition deleted successfully.');
        }

        return redirect()->back()->with('error', 'You are not authorized to delete this exhibition.');
    }

    public function get_exhibitions()
    {
        $exhibitions = Exhibition::with(['schedules' => function ($query) {
            $query->orderBy('start_datetime', 'asc');
        }])->get();
    
        // Обновляем статус каждого расписания
        foreach ($exhibitions as $exhibition) {
            foreach ($exhibition->schedules as $schedule) {
                $schedule->updateStatus();
            }
        }

        return view('exhibitions', compact('exhibitions'));
    }
}
