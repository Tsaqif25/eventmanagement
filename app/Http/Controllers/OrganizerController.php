<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizers = Organizer::paginate(10);
        return view('admin.organizer.index', compact('organizers'));
    }

    public function create()
    {
        $organizer = Organizer::all();
        return view('admin.organizer.create',compact('organizer'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'organizer_name' => 'required|string|max:255', // Nama wajib, berupa string dengan maksimal 255 karakter
            'contact_info' => 'required|string|email|max:255', // Kontak wajib, validasi email, dengan maksimal 255 karakter
            'address' => 'required|string|min:10|max:500', 
        ]);

        Organizer::create($validated);

        return redirect()->route('admin.organizer.index')->with('success', 'Organizer created successfully.');
    }

    public function show(Organizer $organizer)
    {
        return view('admin.organizer.show', compact('organizer'));
    }

    public function edit(Organizer $organizer)
    {
        return view('admin.organizer.edit', compact('organizer'));
    }

    public function update(Request $request, Organizer $organizer)
    {
        $validated = $request->validate([
            'organizer_name' => 'required',
            'contact_info' => 'required',
            'address' => 'required',
        ]);

        $organizer->update($validated);

        return redirect()->route('admin.organizer.index')->with('success', 'Organizer updated successfully.');
    }

    public function destroy(Organizer $organizer)
    {
        $organizer->delete();
        return redirect()->route('admin.organizer.index')->with('success', 'Organizer deleted successfully.');
    }
}
