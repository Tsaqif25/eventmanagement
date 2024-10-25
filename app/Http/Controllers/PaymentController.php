<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Payment;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::with(['participant', 'ticket'])->paginate(10);
        return view('admin.payment.index', compact('payments'));
    }

    public function create()
    {
        $participants = Participant::all();
        $tickets = Ticket::all();
        return view('admin.payment.create', compact('participants', 'tickets'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'bukti_pembayaran' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'nama' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'event_id' => ['required', 'exists:events,id'],
            'status' => 'pending',
        ]);
    
        // Mulai transaksi database
        DB::transaction(function() use ($request, $validated) {
            // Jika ada file yang diunggah
            if ($request->hasFile('bukti_pembayaran')) {
                // Simpan file ke penyimpanan lokal (public directory)
                $bukti_pembayaranPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
                // Simpan jalur file ke dalam array $validated
                $validated['bukti_pembayaran'] = $bukti_pembayaranPath;
            }
    
            // Simpan data pembayaran ke database
            Payment::create($validated);
        });
    
        // Redirect setelah sukses
        return redirect()->route('admin.payments.index')->with('success', 'Pendaftaran berhasil disimpan.');
    }
    

    public function updateStatus(Payment $payment, $status)
    {
        $payment->update(['status' => $status]);
        return redirect()->back()->with('success', 'Status pembayaran diubah.');
    }

    public function show(Payment $payment)
    {
        return view('admin.payment.show', compact('payment'));
    }

    public function edit(Payment $payment)
    {
        $participants = Participant::all();
        $tickets = Ticket::all();
        return view('admin.payment.edit', compact('payment', 'participants', 'tickets'));
    }

    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([
            'payment_date' => 'required|date',
            'participant_id' => 'required|exists:participants,id',
            'ticket_id' => 'required|exists:tickets,id',
        ]);
        $payment->update($validated);
        return redirect()->route('admin.payment.index')->with('success', 'Payment updated successfully.');
    }
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('admin.payment.index')->with('success', 'Payment deleted successfully.');
    }
}
