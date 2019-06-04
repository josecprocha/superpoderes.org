<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->string('system_name');
            $table->foreign('addresses_id')->references('id')->on('addresses');
            $table->foreign('administration_type_id')->references('id')->on('administration_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('systems');
    }
}
