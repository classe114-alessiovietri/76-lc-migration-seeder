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
        Schema::create('books', function (Blueprint $table) {
             // id -> unsigned big integer + AUTO_INCREMENT + PRIMARY KEY
            $table->id();

            // title -> varchar(64) NOT NULL
            $table->string('title', 64);
            // author -> varchar(64) NOT NULL
            $table->string('author', 64);
            // vote_avg -> float NULL UNSIGNED
            $table->float('vote_avg', 2, 1)->nullable()->unsigned();
            // votes_num -> smallint NULL UNSIGNED
            $table->smallInteger('votes_num')->nullable()->unsigned();

            // Crea 2 colonne: created_at e updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
