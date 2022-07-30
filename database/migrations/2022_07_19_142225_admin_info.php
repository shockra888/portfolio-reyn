<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_info',function(Blueprint $table){
            $table->increments('admin_id');
            $table->integer('credentials')->unsigned();
            $table->foreign('credentials')->references('cred_id')->on('admin_cred')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Full_Name');
            $table->string('Address');
            $table->string('Phone_Number');
            $table->string('age');
            $table->string('BirthDate');
            $table->string('email');
            $table->string('Nationality');
            $table->string('Civil_stat');
            $table->string('facebook');
            $table->string('job');
            $table->string('education_Attainment');
            $table->string('objectives');
            $table->string('Trainings/Seminars');
            $table->string('work_exp');
            $table->string('skills');
            $table->string('photo');
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
        Schema::dropIfExists('admin_info');
    }
}
