<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibit;
use Illuminate\Support\Facades\Auth;
class ExhibitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function new_exhibit_index()
    {
        return view('new_exhibit');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'exhibit_date' => 'nullable|date',
        ]);

        $exhibit = new Exhibit;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/assets/exhibits');
            $exhibit->photo = $path;
        }
        $exhibit->name = $request->name;
        $exhibit->author = $request->author;
        $exhibit->description = $request->description;
        $exhibit->creation_date = $request->exhibit_date;
        // $exhibit->photo = $request->photo;
        $exhibit->user_id = Auth::id(); // ID текущего пользователя
        $exhibit->save();

        return redirect()->route('new_exhibit.index')->with('success', 'Exhibit added successfully');
    }

    public function get_exhibits()
    {
        $exhibits = Exhibit::with('user')->get();

        return view('exhibits', compact('exhibits'));
    }

}
