<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->string('monitor')->nullable();
            $table->string('operating')->nullable();
            $table->string('camera_behind')->nullable();
            $table->string('camera_front')->nullable();
            $table->string('chip')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('storage')->nullable();
            $table->string('sim')->nullable();
            $table->string('battery')->nullable();
            $table->integer('product_id')->unsigned();
            $table->timestamps();
            // foreign key
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variants');
    }
}
