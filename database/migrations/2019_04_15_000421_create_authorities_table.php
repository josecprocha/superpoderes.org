<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorityTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('authorities', function (Blueprint $table) {
            $table->unsignedMediumInteger('id')->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('authority_title');
            $table->text('authority_description');
            $table->softDeletes();
        });

        DB::table('authorities')->insert([
            // escola
            ['id' => 1, 'countries_id' => 'BR', 'languages_id' => 'pt-BR', 'authority_title' => 'Apoio Fora da Secretaria', 'authority_description' => 'Agente de Apoio, Agente de Serviços Escolares, Auxiliares de Serviços Gerais e outros cargos com atividades como vigilância, zeladoria, portaria, limpeza e manutenção da escola. Não lidam com a secretaria.'],
            ['id' => 2, 'countries_id' => 'BR', 'languages_id' => 'pt-BR', 'authority_title' => 'Apoio Dentro da Secretaria', 'authority_description' => 'Agente de Organização, Inspetor, Secretário, Assistentes Administrativos, Auxiliares Administrativos, Assistentes Técnicos, Oficiais Administrativos, Oficiais Operacionais e outros cargos que desenvolvem e executam ações envolvendo documentação e atendimento a pais.'],
            ['id' => 3, 'countries_id' => 'BR', 'languages_id' => 'pt-BR', 'authority_title' => 'Auxiliares de Sala de Aula', 'authority_description' => 'Cuidadores, professores ajudantes, estagiários, monitores e outros profissionais que desenvolvem atividades de cuidado e educação junto a professores como auxiliares.'],
            ['id' => 4, 'countries_id' => 'BR', 'languages_id' => 'pt-BR', 'authority_title' => 'Professores', 'authority_description' => 'Profissionais que constituem o quadro de magistério da instituição.'],
            ['id' => 5, 'countries_id' => 'BR', 'languages_id' => 'pt-BR', 'authority_title' => 'Suporte Pedagógico', 'authority_description' => 'Coordenador, Diretor, Vice-Diretor, Supervisor, Dirigente, Assessor, Secretário de Educação, Analistas e outros profissionais responsáveis pelo suporte ao quadro do magistério'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('authorities');
    }
}
