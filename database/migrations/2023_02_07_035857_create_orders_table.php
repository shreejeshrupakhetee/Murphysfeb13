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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bill_id');
            $table->timestamps();
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->biginteger('user_id')->unsigned();
            $table->biginteger('product_id')->unsigned();
            $table->biginteger('webproduct_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->on('webproducts')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) { 
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropForeign(['product_id']);
            $table->dropForeign(['webproduct_id']);
            $table->dropColumn('product_id');
            $table->dropColumn('webproduct_id');
        });
        Schema::dropIfExists('orders');
    }
};
