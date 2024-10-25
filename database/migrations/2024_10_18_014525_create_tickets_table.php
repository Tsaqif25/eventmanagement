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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->integer('availability');  // Ketersediaan tiket
            $table->decimal('price', 8, 2);  // Harga tiket dengan maksimal 8 digit dan 2 digit desimal
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade'); 
            $table->timestamps();  // Kolom created_at dan updated_at secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
