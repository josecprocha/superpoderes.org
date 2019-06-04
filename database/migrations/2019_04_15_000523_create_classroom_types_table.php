<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomTypesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('classroom_types', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('type_name');
            $table->softDeletes();
        });

        DB::table('classroom_types')->insert([
            ['id' => 'BR01', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe Comum'],
            ['id' => 'BR02', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe Multisseriada'],
            ['id' => 'BR03', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe EJA Semipresencial'],
            ['id' => 'BR04', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de Aceleração'],
            ['id' => 'BR05', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de flexibilização'],
            ['id' => 'BR06', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de Recuperação de Ciclo'],
            ['id' => 'BR07', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de Sala de Recursos'],
            ['id' => 'BR08', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe conveniada de Educação Especial'],
            ['id' => 'BR10', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe PIC'],
            ['id' => 'BR11', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe da Educação Especial Itinerante'],
            ['id' => 'BR12', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de Teletec - Segunda a Sexta'],
            ['id' => 'BR13', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de Teletec - Sábados'],
            ['id' => 'BR14', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe EJA Telesala'],
            ['id' => 'BR15', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de Sala de Recursos Multifuncional'],
            ['id' => 'BR16', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de Educação Profissional aos Sábados'],
            ['id' => 'BR17', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Classe de Ensino Médio Integral'],
            ['id' => 'BR18', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'type_name' => 'Ensino Médio Articulado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('classroom_types');
    }
}
