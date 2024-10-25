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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama peserta
            $table->string('address'); // Alamat peserta
            $table->string('phone_number'); // Nomor telepon peserta
            $table->date('registration_date'); // Tanggal pendaftaran
            $table->unsignedBigInteger('event_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
