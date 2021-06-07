<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Weeks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->increments('week_id');
            $table->string('week_weekdays', 10);
            $table->string('status_check', 10);
            $table->string('status', 10);
            $table->date('create_at');
            $table->date('end_at');
            $table->integer('diary_id');
            // $table->foreign('diary_id')->references('diary_id')->on('diary');
            $table->timestamps();
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
