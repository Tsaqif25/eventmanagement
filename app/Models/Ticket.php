<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'availability',
        'price',
        'event_id', // Pastikan menggunakan event_id
       

    ];
    // Relasi ke event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

