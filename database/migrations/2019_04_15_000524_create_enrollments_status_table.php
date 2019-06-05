<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsStatusTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('enrollments_status', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('status_name');
            $table->softDeletes();
        });

        DB::table('enrollments_status')->insert([
            ['id' => 'BR01', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'status_name' => 'Ativo'],
            ['id' => 'BR02', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'status_name' => 'Transferido'],
            ['id' => 'BR03', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'status_name' => 'Abandono'],
            ['id' => 'BR04', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'status_name' => 'Não comparece'],
            ['id' => 'BR05', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'status_name' => 'Outros'],
            ['id' => 'BR06', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'status_name' => 'Remanejado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('enrollments_status');
    }
}
