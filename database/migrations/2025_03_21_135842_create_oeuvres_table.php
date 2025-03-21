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
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255);
            $table->foreignId('categorie_id')->nullable()->constrained('categories');
            $table->string('artiste', 255);
            $table->string('année de fabrication', 255);
            $table->date('date d’acquisition');
            $table->string('prix estimé',255);
            $table->string('description')->nullable();
            $table->string('photo', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvres');
    }
};
