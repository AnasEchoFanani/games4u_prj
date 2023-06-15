<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('game_name')->nullable();
            $table->String('info_game')->nullable();
            $table->String('video')->nullable();
            $table->String('photo_1')->nullable();
            $table->String('photo_2')->nullable();
            $table->String('photo_3')->nullable();
            $table->String('photo_4')->nullable();
            $table->String('price_game')->nullable();
            $table->String('disponibiliter')->nullable();
            $table->String('date')->nullable();
            $table->String('genre')->nullable();
            $table->String('type')->nullable();

            $table->String('Système_dexploitation_min')->nullable();
            $table->String('Processeur_min')->nullable();
            $table->String('Mémoire_vive_min')->nullable();
            $table->String('Graphiques_min')->nullable();
            $table->String('DirectX_min')->nullable();
            $table->String('Espace_disque_min')->nullable();


            $table->String('Système_dexploitation_max')->nullable();
            $table->String('Processeur_max')->nullable();
            $table->String('Mémoire_vive_max')->nullable();
            $table->String('Graphiques_max')->nullable();
            $table->String('DirectX_max')->nullable();
            $table->String('Espace_disque_max')->nullable();

            $table->String('devices')->nullable();
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
