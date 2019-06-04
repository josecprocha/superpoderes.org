<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingModalitiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('teaching_modalities', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('modality_name');
            $table->softDeletes();
        });

        DB::table('teaching_modalities')->insert([
            ['id' => 'BR01', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Ensino fundamental de 8 anos (em desuso)'],
            ['id' => 'BR02', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Ensino Médio'],
            ['id' => 'BR03', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'EJA – Ensino Fundamental – Anos Iniciais (1ª a 4ª)'],
            ['id' => 'BR04', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'EJA – Ensino Fundamental – Anos Finais (5ª a 8ª)'],
            ['id' => 'BR05', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'EJA – Ensino Médio'],
            ['id' => 'BR06', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Infantil'],
            ['id' => 'BR07', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Especial - DA'],
            ['id' => 'BR08', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Especial - DF'],
            ['id' => 'BR09', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Especial - DM (em desuso)'],
            ['id' => 'BR10', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Especial - DV'],
            ['id' => 'BR12', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Profissional'],
            ['id' => 'BR13', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Curso Normal (em desuso)'],
            ['id' => 'BR14', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Ensino Fundamental de 9 anos'],
            ['id' => 'BR15', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'CEL'],
            ['id' => 'BR16', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Especial - DMU'],
            ['id' => 'BR17', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Projeto PAI – Programa de Alfabetização e Inclusão'],
            ['id' => 'BR20', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Recuperação Intensiva'],
            ['id' => 'BR22', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Profissional - Básica'],
            ['id' => 'BR23', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Profissional - Concomitante'],
            ['id' => 'BR24', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Profissional - Subsequente'],
            ['id' => 'BR25', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Profissional - Ensino Médio Integrado'],
            ['id' => 'BR26', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Complementar (Escola Total)'], //Programa Mais Educação?
            ['id' => 'BR30', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Ensino Fundamental (1ª a 5ª) - CASA'],
            ['id' => 'BR32', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Atendimento Educacional Especializado - Sala de Recursos'],
            ['id' => 'BR33', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'EEE - Educação Especial Exclusiva'],
            ['id' => 'BR35', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Educação Profissional'],
            ['id' => 'BR36', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Profissionalizante Integrado à EJA (Proeja) EF'],
            ['id' => 'BR37', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Profissionalizante Integrado à EJA (Proeja) Ensino Médio'],
            ['id' => 'BR40', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Ensino Fundamental (6ª a 9ª) - CASA'],
            ['id' => 'BR50', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'modality_name' => 'Ensino Médio - CASA'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('teaching_modalities');
    }
}
