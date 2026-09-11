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

    Schema::create('doctors', function (Blueprint $table) {
    $table->id('doctor_id');
    $table->unsignedBigInteger('user_id')->nullable();
    $table->unsignedBigInteger('department_id');
    $table->string('fname', 20);
    $table->string('lname', 20);
    $table->string('specialization', 100)->nullable();
    $table->string('phone', 20)->nullable();
    $table->decimal('consultation_fee', 8, 2)->default(0.00);
    $table->timestamps();
    
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
