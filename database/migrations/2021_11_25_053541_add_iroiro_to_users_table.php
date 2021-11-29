<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIroiroToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('area_id');
            $table->string('introduction');
            $table->string('gender');
            $table->integer('age');
            $table->string('image');
            $table->string('movie');
            $table->date('birth');
            $table->string('career');
            $table->integer('pref_id');
            $table->integer('history_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
