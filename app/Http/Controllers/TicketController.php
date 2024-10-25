<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua tiket dengan relasi event dan melakukan paginasi
        $tickets = Ticket::with('event')->paginate(10);
        return view('admin.ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil semua event untuk dipilih saat membuat tiket
        $events = Event::all();
        return view('admin.ticket.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'availability' => 'required|integer', // Menggunakan 'availability' sesuai kolom di tabel
            'price' => 'required|numeric',
            'event_id' => 'required|exists:events,id',
        ]);
        
         $existingTicket = Ticket::where('event_id', $validated['event_id'])->first();
        if ($existingTicket) {
            // Redirect dengan pesan error jika tiket untuk event ini sudah ada
            return redirect()->route('admin.ticket.create')->withErrors(['event_id' => 'Ticket for this event already exists.']);
        }

        // Membuat tiket baru
        Ticket::create($validated);

        return redirect()->route('admin.ticket.index')->with('success', 'Ticket created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('admin.ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        // Mengambil semua event untuk dipilih saat mengedit tiket
        $events = Event::all();
        return view('admin.ticket.edit', compact('ticket', 'events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        // Validasi input
        $validated = $request->validate([
            'availability' => 'required|integer',
            'price' => 'required|numeric',
            'event_id' => 'sometimes|exists:events,id',
        ]);

        $existingTicket = Ticket::where('event_id', $validated['event_id'])->first();
        if ($existingTicket) {
            // Redirect dengan pesan error jika tiket untuk event ini sudah ada
            return redirect()->route('admin.ticket.create')->withErrors(['event_id' => 'Ticket for this event already exists.']);
        }
        // Memperbarui tiket yang sudah ada
        $ticket->update($validated);

        return redirect()->route('admin.ticket.index')->with('success', 'Ticket updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        // Menghapus tiket
        $ticket->delete();
        return redirect()->route('admin.ticket.index')->with('success', 'Ticket deleted successfully.');
    }
}
