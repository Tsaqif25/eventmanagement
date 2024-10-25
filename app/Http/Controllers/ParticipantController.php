<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $participants = Participant::paginate(10);
        return view('admin.participant.index', compact('participants','events'));
    }

    /**
     * Show the form for creating a new participant.
     */
    public function create()
    {
        $events = Event::all(); // Ambil semua event
        return view('admin.participant.create', compact('events')); // Kirim data event ke view
    }
    


    /**
     * Store a newly created participant in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255', // Nama harus berupa string dengan maksimal 255 karakter
            'address' => 'required|string|max:255', // Alamat juga maksimal 255 karakter
            'phone_number' => 'required|numeric',
            'registration_date' => 'required|date|before_or_equal:today', // Tanggal pendaftaran tidak boleh di masa depan
            'event_id' => 'required|exists:events,id', // Validasi event_id harus ada di tabel events
        ]);
        

        Participant::create($validated);

        return redirect()->route('admin.participant.index')->with('success', 'Participant registered successfully.');
    }

    /**
     * Display the specified participant.
     */
    public function show(Participant $participant)
    {
        return view('admin.participant.show', compact('participant'));
    }

    /**
     * Show the form for editing the specified participant.
     */
    public function edit(Participant $participant)
    {
        $events = Event::all(); 
        return view('admin.participant.edit', compact('participant','events'));
    }

    /**
     * Update the specified participant in storage.
     */
    public function update(Request $request, Participant $participant)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255', // Nama harus berupa string dengan maksimal 255 karakter
            'address' => 'required|string|max:255', // Alamat juga maksimal 255 karakter
            'phone_number' => 'required|numeric',
            'registration_date' => 'required|date|before_or_equal:today', // Tanggal pendaftaran tidak boleh di masa depan
            'event_id' => 'required|exists:events,id', // Validasi event_id harus ada di tabel events
        ]);
        

        $participant->update($validated);

        return redirect()->route('admin.participant.index')->with('success', 'Participant registered successfully.');
    }

    /**
     * Remove the specified participant from storage.
     */
    public function destroy(Participant $participant)
    {
        $participant->delete();
        return redirect()->route('admin.participant.index')->with('success', 'Participant deleted successfully.');
    }
}
