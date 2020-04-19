<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers',function(Blueprint $table)
        {
            $table -> bigIncrements('id');
            $table -> string('name');
            $table -> string('state');
            $table -> string('city');
            $table -> string('addr');
            $table -> string('donated');
            $table -> string('gender');
            $table -> float('pincode', 8);
            $table->date('dob'); 
            $table -> float('mob', 12);
            $table -> string('blood_group');
            $table -> mediumText('image_upload');
            $table -> mediumText('id_proof');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
