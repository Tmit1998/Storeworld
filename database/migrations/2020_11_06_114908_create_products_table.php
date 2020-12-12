<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('avatar');
            $table->integer('origin_price')->default(0);
            $table->integer('sale_price')->default(0);
            $table->text('content')->nullable();
            $table->integer('status')->default(0);
            $table->integer('user_id')->referenced('id')->on('users');
            $table->integer('category_id')->referenced('id')->on('categories');
            $table->integer('trademark_id')->referenced('id')->on('trademarks');
            $table->integer('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
