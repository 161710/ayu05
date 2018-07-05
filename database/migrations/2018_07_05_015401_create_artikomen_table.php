<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikomenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikomens', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('artikel_id');
            $table->foreign('artikel_id')->references('id')->on('artikels')->onDelete('CASCADE');
            $table->unsignedInteger('komentar_id');
            $table->foreign('komentar_id')->references('id')->on('komentars')->onDelete('CASCADE');

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
        Schema::dropIfExists('artikomens');
    }
}
