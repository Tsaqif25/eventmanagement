<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // ID pembayaran
            $table->string('bukti_pembayaran'); // Bukti pembayaran
            $table->string('nama'); // Nama pengguna
            $table->string('phone'); // Nomor HP pengguna
            $table->foreignId('event_id')->constrained()->onDelete('cascade'); // Relasi ke tabel events
            $table->enum('status', ['pending', 'approved'])->default('pending'); // Status pembayaran
            $table->timestamps(); // Kolom created_at dan updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
