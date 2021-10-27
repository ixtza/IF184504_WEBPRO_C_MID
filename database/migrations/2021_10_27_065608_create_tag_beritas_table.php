<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_beritas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('berita_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('berita_id')->references('id')->on('beritas');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_beritas');
    }
}
