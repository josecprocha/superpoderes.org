<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationTypeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('administration_type', function (Blueprint $table) {
            $table->char('id')->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('administration_name');
            $table->string('info')->nullable();
        });

        DB::table('administration_type')->insert([
            ['id' => 'BR01', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Federal'],
            ['id' => 'BR02', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Estadual'],
            ['id' => 'BR03', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Municipal'],
            ['id' => 'BR04', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Privada especial (Estadual ou municipal não gratuita, art. 242 da CF)', 'info' => 'Estadual ou municipal não gratuita, art. 242 da CF.'],
            ['id' => 'BR05', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Privada com fins lucrativos (não comunitária nem confessional)', 'info' => 'Mantida por ente privado que visa o lucro.'],
            ['id' => 'BR06', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Privada comunitária não beneficente', 'info' => 'Tem representantes da comunidade na mantenedora'],
            ['id' => 'BR07', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Privada comunitária beneficente', 'info' => 'Tem representantes da comunidade na mantenedora e detém Certificado de Assistência Social'],
            ['id' => 'BR08', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Privada confessional não beneficente', 'info' => 'Atendem orientação confessional e ideológica'],
            ['id' => 'BR09', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Privada confessional beneficente', 'info' => 'Atendem orientação confessional e ideológica e detém Certificado de Assistência Social'],
            ['id' => 'BR10', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'administration_name' => 'Privada filantrópica (não comunitária nem confessional)', 'info' => 'Prestam serviço à população em caráter complementar ao Estado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('administration_type');
    }
}
