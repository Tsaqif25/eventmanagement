<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['bukti_pembayaran', 'nama', 'phone', 'event_id', 'status'];

    // Relasi ke peserta
    // public function participant()
    // {
    //     return $this->belongsTo(Participant::class);
    // }

    // Relasi ke tiket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    // Konstanta untuk status pembayaran
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
