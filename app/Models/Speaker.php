<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;
    protected $fillable = ['speaker_name', 'bio', 'contact_info'];

    // Relasi ke event (many-to-many)
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
