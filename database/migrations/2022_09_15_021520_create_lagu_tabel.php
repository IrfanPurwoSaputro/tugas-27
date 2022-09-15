<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_lagu', 100);
            $table->integer('penyanyi_id')->nullable();
            $table->foreign('penyanyi_id')->references('id')->on('penyanyi');
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
        Schema::table('lagu', function (Blueprint $table){
            $table->string('penyanyi');
            $table->dropForeign(['penyanyi_id']);
        });
    }
};
