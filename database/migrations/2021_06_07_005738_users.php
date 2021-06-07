<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email', 250);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('status');

            $table->integer('type_id');
            // $table->foreign('type_id')->references('type_id')->on('type');
            $table->integer('group_id');
            // $table->foreign('group_id')->references('group_id')->on('group_permissions');
            $table->rememberToken();
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
