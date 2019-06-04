<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('performance_name');
            $table->softDeletes();
        });

        DB::table('performances')->insert([
            ['id' => 'BR01', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'performance_name' => 'Aprovado'],
            ['id' => 'BR02', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'performance_name' => 'Progressão Parcial'],
            ['id' => 'BR03', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'performance_name' => 'Retido por Frequência Insuficiente'],
            ['id' => 'BR04', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'performance_name' => 'Retido por Rendimento Insuficiente'],
            ['id' => 'BR05', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'performance_name' => 'Retido Parcialmente'],
            ['id' => 'BR06', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'performance_name' => 'Aprovado Parcialmente'],
            ['id' => 'BR07', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'performance_name' => 'Terminalidade de Estudos'],
            ['id' => 'BR08', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'performance_name' => 'Cursando'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('performances');
    }
}
