<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table){
            $table->unsignedInteger('user_id')->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('restaurants', function (Blueprint $table){
            $table->unsignedInteger('user_id')->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('restaurants', function (Blueprint $table){
            $table->unsignedInteger('categories_id')->after('id')->nullable();
            $table->foreign('categories_id')->references('id')->on('categories');
        });
        Schema::table('ratings', function (Blueprint $table){
            $table->unsignedInteger('user_id')->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('comments', function (Blueprint $table){
            $table->unsignedInteger('comments_id')->after('id')->nullable();
            $table->foreign('comments_id')->references('id')->on('restaurants');
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
