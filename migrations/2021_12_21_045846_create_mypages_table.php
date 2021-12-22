<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMypagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypages', function (Blueprint $table) {
            $table->id();
            $table->integer('user_table_id');
            $table->string('movie');
            $table->string('image');
            $table->string('party');
            $table->date('birth');
            $table->string('gender');
            $table->string('career');
            $table->string('introduction');
            $table->string('histrory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mypages');
    }
}
