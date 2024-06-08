<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Exhibition;
use App\Models\ExhibitionExhibit;
use App\Models\Schedule;
use Illuminate\Http\Request;

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
        $exhibitions = Exhibition::where('user_id', $user->id)->paginate(5);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function exhibitions_add_index(){
        return view('exhibitions_curator_add');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'ticket_price' => 'required|numeric|min:0',
            'max_tickets' => 'required|integer|min:1',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'direction' => 'required|integer',
            'start_date' => 'required|date|after:now',
            'end_date' => 'required|date|after:start_date',
        ]);

        $exhibition = new Exhibition;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/assets/exhibitions');
            $exhibition->photo = $path;
        }
        $exhibition->name = $request->name;
        $exhibition->address = $request->address;
        $exhibition->ticket_price = $request->ticket_price;
        $exhibition->max_tickets = $request->max_tickets;
        $exhibition->remaining_tickets = $request->max_tickets;
        $exhibition->direction_id = $request->direction;
        $exhibition->user_id = Auth::id();
        $exhibition->save();

        foreach ($request->exhibits as $exhibit) {
            $data['exhibition_id'] = $exhibition->id;
            $data['exhibit_id'] = $exhibit;

            ExhibitionExhibit::saveData($data);
        }

        $data['start_datetime'] = $request->start_date;
        $data['end_datetime'] = $request->end_date;
        $data['status_id'] = 1;

        Schedule::saveData($data);

        return redirect()->route('exhibition_add.index')->with('success', 'Exhibition added successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
