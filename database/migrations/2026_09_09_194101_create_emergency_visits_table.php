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

     Schema::create('emergency_visits', function (Blueprint $table) {
    $table->id('visit_id');
    $table->date('visit_date')->useCurrent();
    $table->time('visit_time')->useCurrent();
    $table->unsignedBigInteger('patient_id')->nullable();
    $table->unsignedBigInteger('service_id');
    $table->text('notes')->nullable();
    $table->timestamps();
    
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_visits');
    }
};
