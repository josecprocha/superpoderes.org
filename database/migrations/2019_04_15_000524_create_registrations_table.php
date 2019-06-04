<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('registration_name');
            $table->softDeletes();
        });

        DB::table('registrations')->insert([
            ['id' => 'BR01', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'registration_name' => 'Ativo'],
            ['id' => 'BR02', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'registration_name' => 'Transferido'],
            ['id' => 'BR03', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'registration_name' => 'Abandono'],
            ['id' => 'BR04', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'registration_name' => 'Não comparece'],
            ['id' => 'BR05', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'registration_name' => 'Outros'],
            ['id' => 'BR06', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'registration_name' => 'Remanejado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('registration');
    }
}
