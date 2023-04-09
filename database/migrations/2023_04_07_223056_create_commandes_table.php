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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->String('numcom')->nullable();
            $table->String('produit_id')->nullable();
            $table->String('name_pro')->nullable();
            $table->String('photo1_pro')->nullable();
            $table->String('prix_pro')->nullable();
            $table->String('name_cl')->nullable();
            $table->String('email_cl')->nullable();
            $table->String('num_facture')->nullable();
            $table->String('mode_paiment')->nullable();
            $table->String('total_pro')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
