<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutfitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfits', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('tops_id')->unsigned()->index();
          $table->integer('bottoms_id')->unsigned()->index();
          $table->integer('shoes_id')->unsigned()->index();
          $table->timestamps();

          $table->foreign('tops_id')->references('id')->on('tops');
          $table->foreign('bottoms_id')->references('id')->on('bottoms');
          $table->foreign('shoes_id')->references('id')->on('shoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outfits');
    }
}
