<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('id_type')->after('id')->nullable();
            $table->foreign('id_type')->references('id')->on('type_products');
        });
        Schema::table('bill_detail', function (Blueprint $table) {
            $table->unsignedInteger('id_product')->after('id')->nullable();
            $table->foreign('id_product')->references('id')->on('products');

        });
        Schema::table('bill_detail', function (Blueprint $table) {
            $table->unsignedInteger('id_bill')->after('id_product')->nullable();
            $table->foreign('id_bill')->references('id')->on('bills');
        });
        Schema::table('bills', function (Blueprint $table) {
            $table->unsignedInteger('id_customer')->after('id')->nullable();
            $table->foreign('id_customer')->references('id')->on('customer');
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
