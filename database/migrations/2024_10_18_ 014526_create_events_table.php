<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('event_name');  // Nama event
            $table->text('about');  // Deskripsi singkat event
            $table->foreignId('organizer_id')->constrained('organizers')->onDelete('cascade');  // Foreign key ke tabel organizers
            $table->string('speaker');  // Nama pembicara
            $table->date('event_date');  // Tanggal event
            $table->time('event_time');  // Waktu event
            $table->string('location');  // Lokasi event
            $table->timestamps();  // Kolom created_at dan updated_at secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
