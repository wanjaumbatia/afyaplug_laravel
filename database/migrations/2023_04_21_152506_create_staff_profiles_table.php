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
        Schema::create('staff_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('area')->nullable();
            $table->string('town')->nullable();
            $table->string('county')->nullable(); //foreign key
            $table->date('date_of_birth')->nullable();
            $table->string('employment_status')->default('Open');
            $table->date('contract_start_date')->nullable();
            $table->date('contract_end_date')->nullable();
            $table->string('nurse_license_number')->nullable();
            $table->string('specialty')->nullable();
            $table->string('title')->nullable();
            $table->string('id_number')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('filled_education')->default(false);
            $table->decimal('pay_rate')->nullable();
            //language
            $table->boolean('criminal_background_check')->default(false);
            //certifications
            //experience
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
        Schema::dropIfExists('staff_profiles');
    }
};
