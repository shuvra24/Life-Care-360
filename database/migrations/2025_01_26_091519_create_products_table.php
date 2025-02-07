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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID column
            $table->string('name'); // Product name
            $table->decimal('price', 10, 2); // Price column (10 digits, 2 decimal)
            $table->timestamps(); // Created_at and updated_at columns
            });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
