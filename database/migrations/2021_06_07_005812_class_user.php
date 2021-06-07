<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_user', function (Blueprint $table) {
            
            $table->integer('user_id');
            // $table->foreign('user_id')->references('user_id')->on('users');
            $table->integer('status');
            $table->integer('class_id');
            // $table->foreign('class_id')->references('class_id')->on('classes');
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
