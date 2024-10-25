<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speakers = Speaker::all(); // Ambil semua data pembicara
        return view('admin.speaker.index', compact('speakers'));
    }

    public function create()
    {
        return view('admin.speaker.create');
    }

    public function store(Request $request)
    {
      
        $validated = $request->validate([
            'speaker_name' => 'required|string|max:255',
            'bio' => 'required|string',
            'contact_info' => 'required|string',
        ]);

        Speaker::create($validated);

        return redirect()->route('admin.speaker.index')->with('success', 'Speaker created successfully.');
    }

    public function show(Speaker $speaker)
    {
        return view('admin.speakers.show', compact('speaker'));
    }

    public function edit(Speaker $speaker)
    {
        return view('admin.speaker.edit', compact('speaker'));
    }

    public function update(Request $request, Speaker $speaker)
    {
        $validated = $request->validate([
            'speaker_name' => 'required',
            'bio' => 'required',
            'contact_info' => 'required',
        ]);

        $speaker->update($validated);

        return redirect()->route('admin.speaker.index')->with('success', 'Speaker updated successfully.');
    }

    public function destroy(Speaker $speaker)
    {
        $speaker->delete();
        return redirect()->route('admin.speaker.index')->with('success', 'Speaker deleted successfully.');
    }
}
