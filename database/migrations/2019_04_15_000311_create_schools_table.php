<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            // educational system
            $table->foreign('systems_id')->references('id')->on('systems');
            $table->string('school_name');
            $table->foreign('addresses_id')->references('id')->on('addresses');
            $table->string('city');
            // $Table->foreign('cities_id')->references('id')->on('cities');
            $table->foreign('administration_type_id')->references('id')->on('administration_type');
            $table->foreign('localization_type_id')->references('id')->on('localization_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
