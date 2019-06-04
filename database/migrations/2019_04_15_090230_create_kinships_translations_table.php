<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleKinshipsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kinships_translations', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->foreign('kinships_id')->references('id')->on('kinships');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('kinship_description_tr');
        });

        DB::table('people_kinships_translation')->insert([
            ['people_kinships_id' => 1, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Pai ou mãe (1º grau ascendente)'],
            ['people_kinships_id' => 2, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Padrasto ou madrasta (1º grau por afinidade)'],
            ['people_kinships_id' => 3, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Avô ou avó (2º grau ascendente)'],
            ['people_kinships_id' => 4, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Irmão ou irmã (2º grau colateral)'],
            ['people_kinships_id' => 5, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Cunhado ou cunhada (2º grau por afinidade)'],
            ['people_kinships_id' => 6, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Bisavô ou bisavó (3º grau ascendente)'],
            ['people_kinships_id' => 7, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Tio ou tia (3º grau colateral)'],
            ['people_kinships_id' => 8, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Sobrinho ou sobrinha (3º grau colateral)'],
            ['people_kinships_id' => 9, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Trisavós, tios avós, primos ou sobrinhos netos (4º grau)'],
            ['people_kinships_id' => 10, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Outro parente'],
            ['people_kinships_id' => 11, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Cuidador ou cuidadora'],
            ['people_kinships_id' => 12, 'languages_id' => 'pt-br', 'kinship_description_tr' => 'Mora na mesma casa'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('people_kinships_translations');
    }
}
