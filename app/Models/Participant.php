<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'address', 
        'phone_number', 
        'registration_date',
        'event_id', // Menyesuaikan dengan migrasi
    ];

    // Relasi ke pembayaran (one-to-many)
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    // Relasi ke event (many-to-one)
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
