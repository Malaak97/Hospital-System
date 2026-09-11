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

    Schema::create('surgery_bookings', function (Blueprint $table) {
    $table->id('surgery_id');
    $table->date('surgery_date');
    $table->time('surgery_time');
    $table->unsignedBigInteger('patient_id');
    $table->unsignedBigInteger('doctor_id');
    $table->string('surgery_type', 100);
    $table->string('operating_room', 50)->nullable();
    $table->enum('status', ['scheduled', 'completed', 'cancelled'])->default('scheduled');
    $table->text('notes')->nullable();
    $table->timestamps();
    
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surgery_bookings');
    }
};
