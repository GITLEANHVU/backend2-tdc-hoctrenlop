<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_category', function (Blueprint $table) {

            $table->integer('status');

            $table->integer('company_id');
            // $table->foreign('company_id')->references('company_id')->on('companies');
            $table->integer('category_id');
            // $table->foreign('category_id')->references('category_id')->on('categories');
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
