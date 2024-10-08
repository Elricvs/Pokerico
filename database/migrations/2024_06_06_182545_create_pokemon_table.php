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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('imgurl')->nullable();
            $table->text('description');
            $table->integer('hp');
            $table->integer('att');
            $table->integer('def');
            $table->integer('attspe');
            $table->integer('defspe');
            $table->integer('vit');
            $table->float('size');
            $table->float('weight');
            $table->foreignId('type1_id')->references('id')->on('types');
            $table->foreignId('type2_id')->nullable()->references('id')->on('types');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
