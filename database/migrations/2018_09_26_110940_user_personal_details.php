<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPersonalDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_details', function (Blueprint $table) {
            $table->increments('personal_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->smallInteger('gender');
            $table->date('date_birth');
            $table->string('father_name');
            $table->string('mother_name');
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
        Schema::dropIfExists('user_personal_details');
    }
}
