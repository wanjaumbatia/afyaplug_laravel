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
        Schema::create('sms_messages', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('message');
            $table->string('message_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('sent')->default(false);
            $table->boolean('delivered')->default(false);
            $table->string('reference')->nullable();
            $table->dateTime('sent_on')->nullable();
            $table->dateTime('delivered_on')->nullable();
            // order
            // $table->unsignedBigInteger('order_id')->nullable();
            // $table->foreign('order_id')->references('id')->on('orders');

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
        Schema::dropIfExists('sms_messages');
    }
};
