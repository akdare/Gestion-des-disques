<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discs', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("artistes");
            $table->string("dateSortie");
            $table->string("auteur");
            $table->string("compositeur");
            $table->string("producteur");
            $table->string("genre");
            $table->string("photo");
            $table->string("rayon");
            $table->string("etagere");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discs');
    }
}


