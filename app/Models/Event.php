<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_name', 
        'event_date', 
        'event_time', 
        'location', 
        'about', 
        'organizer_id', 
        'speaker'
    ];

    // Relasi ke tiket (satu event memiliki banyak tiket)
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    // Relasi ke penyelenggara
    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    // Relasi ke pembicara (many-to-many)
    // public function speakers()
    // {
    //     return $this->belongsToMany(Speaker::class);
    // }
}
