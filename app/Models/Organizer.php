<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    protected $fillable = ['organizer_name', 'contact_info', 'address'];

    // Relasi ke event (penyelenggara dapat memiliki banyak event)
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
