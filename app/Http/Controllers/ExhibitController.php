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
    public function index()
    {
        $posts = Exhibit::orderBy('created_at', 'desc')->paginate(10);
        return view('exhibits_curator_add', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('exhibits_curator_add.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'creation_date' => 'nullable|date',
            'photo' => 'required|string|max:255',
        ]);

        $exhibit = new Exhibit;
        $exhibit->name = $request->name;
        $exhibit->author = $request->author;
        $exhibit->description = $request->description;
        $exhibit->creation_date = $request->creation_date;
        $exhibit->photo = $request->photo;
        $exhibit->user_id = Auth::id(); // ID текущего пользователя
        $exhibit->save();

        return redirect()->route('exhibits_curator_add.index')->with('success', 'Exhibit added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
