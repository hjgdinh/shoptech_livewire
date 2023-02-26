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
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('price');
            $table->tinyInteger('status')->default('1')->comment('1 : Còn hàng, 2 : Hết hàng')->nullable();
            $table->integer('quantity')->default('100')->nullable();
            $table->longText('image')->nullable();
            $table->longText('description');
            // foreign key
            $table->unsignedInteger('category_id')->default('1');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
                    //->onDelete('set null');
            $table->timestamps();            
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

