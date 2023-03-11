<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company')->nullable();
            $table->string('address');
            $table->string('s_address')->nullable();
            $table->string('city');
            $table->string('country');
            $table->string('zip');
            $table->string('phone');
            $table->string('email');
            $table->string('note')->nullable();           
            $table->string('subtotal');
            $table->string('total');
            $table->string('discount')->default(0);
            $table->tinyInteger('status')->default('1')->comment('1 : Chờ duyệt, 2 : Duyệt thành công, 3 : Hủy hàng');
            $table->tinyInteger('payment_method')->comment('1 : Khi nhận hàng, 2 : Card/Visa, 3 : Paypal');
            $table->timestamps();
            // foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
