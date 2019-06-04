<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->char('id')->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('shifts_name');
            $table->softDeletes();
        });

        DB::table('shifts')->insert([
            ['id' => 'BR01', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Matutino'],
            ['id' => 'BR01', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Intermediário'],
            ['id' => 'BR02', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Vespertino'],
            ['id' => 'BR03', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Noturno'],
            ['id' => 'BR04', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Flexibilizado'],
            ['id' => 'BR05', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Integral Diurno'],
            ['id' => 'BR06', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Integral Noturno'],
            ['id' => 'BR07', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Sem Classificação'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('shifts');
    }
}
