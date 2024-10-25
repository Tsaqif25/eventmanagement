<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Front;
use App\Models\Ticket;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Fetch events along with their organizers and tickets in one go (avoid fetching twice)
    $events = Event::with(['organizer', 'tickets'])->get();
    
    // Paginate tickets, including their associated events
    $tickets = Ticket::with('event')->paginate(10);
    
    // Sort events by 'event_date'
    $events = $events->sortBy('event_date');
    
    // Group events by 'event_date'
    $eventsByDate = $events->groupBy('event_date');
    
    // Send both grouped events and tickets to the view
    return view('front.indexx', compact('eventsByDate', 'tickets'));
}

    
    

    public function about()
    {
        // dd('Reached here');
        return view('front.about'); // Menampilkan halaman About
    }

    public function speakers()
    {
        return view('front.speakers'); // Menampilkan halaman Speakers
    }

    public function schedule()
    {
        $events = Event::with(['organizer', 'tickets'])->get();
    
        // Paginate tickets, including their associated events
        $tickets = Ticket::with('event')->paginate(10);
        
        // Sort events by 'event_date'
        $events = $events->sortBy('event_date');
        
        // Group events by 'event_date'
        $eventsByDate = $events->groupBy('event_date');
        return view('front.schedule',compact('eventsByDate', 'tickets')); // Menampilkan halaman Schedule
    }

    public function blog()
    {
        return view('front.blog'); // Menampilkan halaman Blog
    }

    public function contact()
    {
        return view('front.contact'); // Menampilkan halaman Contact
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Front $front)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Front $front)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Front $front)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Front $front)
    {
        //
    }
}
