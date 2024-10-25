<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organizer; // Pastikan ini di-import
use App\Models\Speaker; // Pastikan ini di-import
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with(['organizer'])->paginate(10);
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua data organizer dan speaker
        $organizers = Organizer::all(); 
        $speakers = Speaker::all(); 
        
        return view('admin.event.create', compact('organizers', 'speakers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'about' => 'required|string',
            'organizer_id' => 'nullable|exists:organizers,id',
            'speaker' => 'required|string|max:255',
        ]);

        // Setelah validasi berhasil, simpan event ke database
        Event::create($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.event.index')->with('success', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // No need for pagination here, just pass the event directly
        $event->load('organizer');

        // Pass the event directly to the view
        return view('admin.event.show', compact('event'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        // Ambil semua data organizer dan speaker
        $organizers = Organizer::all(); 
        $speakers = Speaker::all(); 
        
        return view('admin.event.edit', compact('event', 'organizers', 'speakers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'about' => 'required|string',
            'organizer_id' => 'required|exists:organizers,id',
            'speaker_id' => 'nullable|exists:speakers,id',
        ]);

        // Update event
        $event->update($validated);

        return redirect()->route('admin.event.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.index')->with('success', 'Event deleted successfully.');
    }
}
