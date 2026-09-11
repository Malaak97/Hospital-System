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
        
    Schema::create('medicines', function (Blueprint $table) {
    $table->id('medicine_id');
    $table->string('medicine_name', 100);
    $table->unsignedBigInteger('category_id');
    $table->text('description')->nullable();
    $table->decimal('price', 10, 2);
    $table->integer('stock_quantity')->default(0);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
