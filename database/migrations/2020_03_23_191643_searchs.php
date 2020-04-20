<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Searchs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches',function(Blueprint $table)
        {
            $table -> bigIncrements('id');
            $table -> string('name');
            $table -> string('state');
            $table -> string('city');
            $table -> float('pincode', 8);
            $table -> float('age');
            $table -> float('lat', 20);
            $table -> float('long', 20);
            $table -> string('addr');
            $table->date('dob'); 
            $table -> float('mob', 12);
            $table -> string('blood_group');
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
