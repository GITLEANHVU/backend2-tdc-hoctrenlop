<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diarycontent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarycontent', function (Blueprint $table) {
            $table->increments('diarycontent_id');
            $table->string('diarycontent_weekday', 200);
            $table->string('diarycontent_work', 200);
            $table->string('diarycontent_content', 200);
            $table->string('diarycontent_note', 200);
            $table->string('diarycontent_teacher_comment', 200);
            $table->string('diarycontent_trainer_comment', 200);
            $table->integer('status');
            $table->integer('week_id');
            // $table->foreign('week_id')->references('week_id')->on('weeks');
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
