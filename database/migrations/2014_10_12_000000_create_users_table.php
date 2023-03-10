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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->longText('avatar')->nullable();
            $table->tinyInteger('gender')->comment('1 : male, 2 : female');
            $table->string('phone');
            $table->string('address');
            $table->string('utype')->default('USR')->comment('ADM : Admin, USR : User');
            $table->timestamps();
            // foreign keys
            // $table->foreign('role_id')
            //         ->references('id')
            //         ->on('roles')
            //         ->onDelete('cascade');
            //         //->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
