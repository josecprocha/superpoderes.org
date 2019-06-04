<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalizationTypeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('localization_type', function (Blueprint $table) {
            $table->char('id')->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('localization_name');
        });

        DB::table('localization_type')->insert([
            ['id' => 'BR01', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'localization_name' => 'Urbana'],
            ['id' => 'BR02', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'localization_name' => 'Rural'],
            ['id' => 'BR03', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'localization_name' => 'Terra indígena'],
            ['id' => 'BR04', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'localization_name' => 'Unidade de uso sustentável'], // https://escolaeducacao.com.br/unidades-de-conservacao-biologia/
            ['id' => 'BR05', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'localization_name' => 'Unidade de uso sustentável em terra indígena'],
            ['id' => 'BR06', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'localization_name' => 'Unidade de uso sustentável em área remanescente de quilombos'],
            ['id' => 'BR07', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'localization_name' => 'Área de assentamento'],
            ['id' => 'BR08', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'localization_name' => 'Área remanescente de quilombos'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('localization_type');
    }
}
