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
        Schema::create('volunteer', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('country_of_origin');
            $table->string('country_of_residence');
            $table->string('state_of_residence');
            $table->string('address');
            $table->string('dob');
            $table->string('gender');
            $table->string('education');
            $table->string('phone');
            $table->string('whatsapp_number');
            $table->string('skills');
            $table->string('occupation');
            $table->string('passport');
            $table->string('why_you_want_volunteer');
            $table->string('why_you_want_to_join');
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
        Schema::dropIfExists('volunteer');
    }
};
