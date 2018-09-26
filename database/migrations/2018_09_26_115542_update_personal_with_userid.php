<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePersonalWithUserid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_personal_details', function(Blueprint $table)
        {
            $table->integer('user_id')->unsigned()->after('personal_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_personal_details', function(Blueprint $table)
        {

            $table->dropForeign('user_personal_details_user_id_foreign');
            $table->dropColumn('user_id');

        });
    }
}
