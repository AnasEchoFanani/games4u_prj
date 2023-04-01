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
            $table->id();
            $table->String('game_name')->nullable();
            $table->String('info_game')->nullable();
            $table->String('photo')->nullable();
            $table->String('photo1')->nullable();
            $table->String('photo2')->nullable();
            $table->String('categorie')->nullable();
            $table->String('price_game')->nullable();
            $table->String('disponibiliter')->nullable();
            $table->String('date')->nullable();
            $table->String('category')->nullable();
            $table->timestamps();
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
