<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteerVietnamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_vietnams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Email');
            $table->string('Fullname');
            $table->integer('ID no');
            $table->string('Gender');
            $table->integer('Mobile No');
            $table->string('Address');
            $table->string('Country');
            $table->string('City');
            $table->string('Student');
            $table->string('University');
            $table->string('University Name');
            $table->string('Course');
            $table->string('Faculty');
            $table->string('Free Time');
            $table->string('Do you know anyone with cancer');
            $table->string('Cancer type');
            $table->string('Hobbies');
            $table->string('Experiences');
            $table->string('Skills');
            $table->string('Favorite volunteering activities');
            $table->string('Where do you know MAKNA');
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
        Schema::dropIfExists('volunteer_vietnams');
    }
}
