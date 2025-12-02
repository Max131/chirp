<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = Chirp::with("user")->latest()->take(50)->get();

        return view("home", ["chirps" => $chirps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate(
            [
                'message' => 'required|string|max:255|min:5',
            ],
            [
                'message.required' => 'Please enter a message for your chirp.',
                'message.string' => 'The message must be a valid string.',
                'message.max' => 'The message may not be greater than 255 characters.',
                'message.min' => 'The message must be at least 5 characters long.',
            ]
        );

        // Create a new chirp
        Chirp::create([
            'message' => $validated['message'],
        ]);

        return redirect('/')->with('success', 'Chirp created!');
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
    public function edit(Chirp $chirp)
    {

        return view('chirps.edit', compact('chirp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        // Validate
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Update
        $chirp->update($validated);

        return redirect('/')->with('success', 'Chirp updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
