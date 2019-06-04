<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalitiesSeriationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('modalities_seriations', function (Blueprint $table) {
            $table->char('id', 6)->primary();
            $table->foreign('teaching_modalities_id')->references('id')->on('teaching_modalities');
            $table->string('seriations_name');
            $table->string('seriations_info')->nullable();
            $table->softDeletes();
        });

        DB::table('modalities_seriations')->insert([
            ['id' => 'BR0101', 'teaching_modalities_id' => 'BR01', 'seriations_name' => '1ª Serie'],
            ['id' => 'BR0102', 'teaching_modalities_id' => 'BR01', 'seriations_name' => '2ª Serie'],
            ['id' => 'BR0103', 'teaching_modalities_id' => 'BR01', 'seriations_name' => '3ª Serie'],
            ['id' => 'BR0104', 'teaching_modalities_id' => 'BR01', 'seriations_name' => '4ª Serie'],
            ['id' => 'BR0105', 'teaching_modalities_id' => 'BR01', 'seriations_name' => '5ª Serie'],
            ['id' => 'BR0106', 'teaching_modalities_id' => 'BR01', 'seriations_name' => '6ª Serie'],
            ['id' => 'BR0107', 'teaching_modalities_id' => 'BR01', 'seriations_name' => '7ª Serie'],
            ['id' => 'BR0108', 'teaching_modalities_id' => 'BR01', 'seriations_name' => '8ª Serie'],
            ['id' => 'BR0201', 'teaching_modalities_id' => 'BR02', 'seriations_name' => '1ª Serie', 'seriations_info' => 'Rede Estadual = Obrigatorio codigo de habilitacao 9903'],
            ['id' => 'BR0202', 'teaching_modalities_id' => 'BR02', 'seriations_name' => '2ª Serie', 'seriations_info' => 'Rede Estadual = Obrigatorio codigo de habilitacao 9903'],
            ['id' => 'BR0203', 'teaching_modalities_id' => 'BR02', 'seriations_name' => '3ª Serie', 'seriations_info' => 'Rede Estadual = Obrigatorio codigo de habilitacao 9903'],
            ['id' => 'BR0309', 'teaching_modalities_id' => 'BR03', 'seriations_name' => '1º Termo - 1ª e 2ª Serie', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0310', 'teaching_modalities_id' => 'BR03', 'seriations_name' => '2º Termo - 3ª e 4ª Serie', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0409', 'teaching_modalities_id' => 'BR04', 'seriations_name' => '1º Termo - 5ª Serie', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0410', 'teaching_modalities_id' => 'BR04', 'seriations_name' => '2º Termo - 6ª Serie', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0411', 'teaching_modalities_id' => 'BR04', 'seriations_name' => '3º Termo - 7ª Serie', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0412', 'teaching_modalities_id' => 'BR04', 'seriations_name' => '4º Termo - 8ª Serie', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0509', 'teaching_modalities_id' => 'BR05', 'seriations_name' => '1º Termo', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0510', 'teaching_modalities_id' => 'BR05', 'seriations_name' => '2º Termo', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0511', 'teaching_modalities_id' => 'BR05', 'seriations_name' => '3º Termo', 'seriations_info' => 'Somente para EJA Presencial'],
            ['id' => 'BR0601', 'teaching_modalities_id' => 'BR06', 'seriations_name' => '1ª Etapa - Pre-Escola', 'seriations_info' => 'Atende criancas de 4 anos'],
            ['id' => 'BR0602', 'teaching_modalities_id' => 'BR06', 'seriations_name' => '2ª Etapa - Pre-Escola', 'seriations_info' => 'Atende criancas de 5 anos'],
            ['id' => 'BR0603', 'teaching_modalities_id' => 'BR06', 'seriations_name' => '3ª Etapa - Pre-Escola', 'seriations_info' => 'Atende criancas de 6 anos'],
            ['id' => 'BR0604', 'teaching_modalities_id' => 'BR06', 'seriations_name' => 'Bercario 1', 'seriations_info' => 'Atende criancas de ate 11 meses'],
            ['id' => 'BR0605', 'teaching_modalities_id' => 'BR06', 'seriations_name' => 'Bercario 2', 'seriations_info' => 'Atende criancas de 1 anos'],
            ['id' => 'BR0606', 'teaching_modalities_id' => 'BR06', 'seriations_name' => 'Maternal 1', 'seriations_info' => 'Atende criancas de 2 anos'],
            ['id' => 'BR0607', 'teaching_modalities_id' => 'BR06', 'seriations_name' => 'Maternal 2', 'seriations_info' => 'Atende criancas de 3 anos'],
            ['id' => 'BR0700', 'teaching_modalities_id' => 'BR07', 'seriations_name' => 'Educacao Especial - DA', 'seriations_info' => 'Atende deficientes auditivos - nao tem seriacao'],
            ['id' => 'BR0800', 'teaching_modalities_id' => 'BR08', 'seriations_name' => 'Educacao Especial - DF', 'seriations_info' => 'Atende deficientes fisicos - nao tem seriacao'],
            ['id' => 'BR0900', 'teaching_modalities_id' => 'BR09', 'seriations_name' => 'Educacao Especial - DM', 'seriations_info' => 'Atende deficientes mentais - nao tem seriacao'],
            ['id' => 'BR1000', 'teaching_modalities_id' => 'BR10', 'seriations_name' => 'Educacao Especial - DV', 'seriations_info' => 'Atende deficientes visuais - não tem seriacao'],
            ['id' => 'BR1201', 'teaching_modalities_id' => 'BR12', 'seriations_name' => '1º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1202', 'teaching_modalities_id' => 'BR12', 'seriations_name' => '2º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1203', 'teaching_modalities_id' => 'BR12', 'seriations_name' => '3º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1204', 'teaching_modalities_id' => 'BR12', 'seriations_name' => '4º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1205', 'teaching_modalities_id' => 'BR12', 'seriations_name' => '5º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1206', 'teaching_modalities_id' => 'BR12', 'seriations_name' => '6º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1207', 'teaching_modalities_id' => 'BR12', 'seriations_name' => '7º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1208', 'teaching_modalities_id' => 'BR12', 'seriations_name' => '8º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1301', 'teaching_modalities_id' => 'BR13', 'seriations_name' => '1ª Serie', 'seriations_info' => 'No caso de curso normal o sistema automaticamente atribui o codigo de habilitacao 5886'],
            ['id' => 'BR1302', 'teaching_modalities_id' => 'BR13', 'seriations_name' => '2ª Serie', 'seriations_info' => 'No caso de curso normal o sistema automaticamente atribui o codigo de habilitacao 5886'],
            ['id' => 'BR1303', 'teaching_modalities_id' => 'BR13', 'seriations_name' => '3ª Serie', 'seriations_info' => 'No caso de curso normal o sistema automaticamente atribui o codigo de habilitacao 5886'],
            ['id' => 'BR1304', 'teaching_modalities_id' => 'BR13', 'seriations_name' => '4ª Serie', 'seriations_info' => 'No caso de curso normal o sistema automaticamente atribui o codigo de habilitacao 5886'],
            ['id' => 'BR1401', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '1º Ano', 'seriations_info' => 'Anos Iniciais'],
            ['id' => 'BR1402', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '2º Ano', 'seriations_info' => 'Anos Iniciais'],
            ['id' => 'BR1403', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '3º Ano', 'seriations_info' => 'Anos Iniciais'],
            ['id' => 'BR1404', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '4º Ano', 'seriations_info' => 'Anos Iniciais'],
            ['id' => 'BR1405', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '5º Ano', 'seriations_info' => 'Anos Iniciais'],
            ['id' => 'BR1406', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '6º Ano', 'seriations_info' => 'Anos Finais'],
            ['id' => 'BR1407', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '7º Ano', 'seriations_info' => 'Anos Finais'],
            ['id' => 'BR1408', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '8º Ano', 'seriations_info' => 'Anos Finais'],
            ['id' => 'BR1409', 'teaching_modalities_id' => 'BR14', 'seriations_name' => '9º Ano', 'seriations_info' => 'Anos Finais'],
            ['id' => 'BR1501', 'teaching_modalities_id' => 'BR15', 'seriations_name' => 'Nivel 1 - 1º Estagio', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1502', 'teaching_modalities_id' => 'BR15', 'seriations_name' => 'Nivel 1 - 2º Estagio', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1503', 'teaching_modalities_id' => 'BR15', 'seriations_name' => 'Nivel 1 - 3º Estagio', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1504', 'teaching_modalities_id' => 'BR15', 'seriations_name' => 'Nivel 2 - 1º Estagio', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1505', 'teaching_modalities_id' => 'BR15', 'seriations_name' => 'Nivel 2 - 2º Estagio', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1506', 'teaching_modalities_id' => 'BR15', 'seriations_name' => 'Nivel 2 - 3º Estagio', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR1600', 'teaching_modalities_id' => 'BR16', 'seriations_name' => 'Educacao Especial - DMU', 'seriations_info' => 'Atende deficientes multiplos'],
            ['id' => 'BR2000', 'teaching_modalities_id' => 'BR20', 'seriations_name' => 'Recuperacao Intensiva', 'seriations_info' => 'Nao lancar a serie'],
            ['id' => 'BR2201', 'teaching_modalities_id' => 'BR22', 'seriations_name' => '1º Modulo'],
            ['id' => 'BR2202', 'teaching_modalities_id' => 'BR22', 'seriations_name' => '2º Modulo'],
            ['id' => 'BR2203', 'teaching_modalities_id' => 'BR22', 'seriations_name' => '3º Modulo'],
            ['id' => 'BR2204', 'teaching_modalities_id' => 'BR22', 'seriations_name' => '4º Modulo'],
            ['id' => 'BR2205', 'teaching_modalities_id' => 'BR22', 'seriations_name' => '5º Modulo'],
            ['id' => 'BR2206', 'teaching_modalities_id' => 'BR22', 'seriations_name' => '6º Modulo'],
            ['id' => 'BR2207', 'teaching_modalities_id' => 'BR22', 'seriations_name' => '7º Modulo'],
            ['id' => 'BR2208', 'teaching_modalities_id' => 'BR22', 'seriations_name' => '8º Modulo'],
            ['id' => 'BR2301', 'teaching_modalities_id' => 'BR23', 'seriations_name' => '1º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2302', 'teaching_modalities_id' => 'BR23', 'seriations_name' => '2º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2303', 'teaching_modalities_id' => 'BR23', 'seriations_name' => '3º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2304', 'teaching_modalities_id' => 'BR23', 'seriations_name' => '4º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2305', 'teaching_modalities_id' => 'BR23', 'seriations_name' => '5º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2306', 'teaching_modalities_id' => 'BR23', 'seriations_name' => '6º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2307', 'teaching_modalities_id' => 'BR23', 'seriations_name' => '7º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2308', 'teaching_modalities_id' => 'BR23', 'seriations_name' => '8º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2401', 'teaching_modalities_id' => 'BR24', 'seriations_name' => '1º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2402', 'teaching_modalities_id' => 'BR24', 'seriations_name' => '2º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2403', 'teaching_modalities_id' => 'BR24', 'seriations_name' => '3º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2404', 'teaching_modalities_id' => 'BR24', 'seriations_name' => '4º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2405', 'teaching_modalities_id' => 'BR24', 'seriations_name' => '5º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2406', 'teaching_modalities_id' => 'BR24', 'seriations_name' => '6º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2407', 'teaching_modalities_id' => 'BR24', 'seriations_name' => '7º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2408', 'teaching_modalities_id' => 'BR24', 'seriations_name' => '8º Modulo', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2501', 'teaching_modalities_id' => 'BR25', 'seriations_name' => '1ª Serie', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2502', 'teaching_modalities_id' => 'BR25', 'seriations_name' => '2ª Serie', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2503', 'teaching_modalities_id' => 'BR25', 'seriations_name' => '3ª Serie', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2504', 'teaching_modalities_id' => 'BR25', 'seriations_name' => '4ª Serie', 'seriations_info' => 'Utilizar a tabela de codigos de habilitacao do Sistema de Cadastro de Alunos'],
            ['id' => 'BR2601', 'teaching_modalities_id' => 'BR26', 'seriations_name' => 'Alunos de Pre-Escola'],
            ['id' => 'BR2602', 'teaching_modalities_id' => 'BR26', 'seriations_name' => 'Alunos Series/Anos Iniciais'],
            ['id' => 'BR2603', 'teaching_modalities_id' => 'BR26', 'seriations_name' => 'Alunos Serie/Anos Finais'],
            ['id' => 'BR3001', 'teaching_modalities_id' => 'BR30', 'seriations_name' => '1º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR3002', 'teaching_modalities_id' => 'BR30', 'seriations_name' => '2º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR3003', 'teaching_modalities_id' => 'BR30', 'seriations_name' => '3º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR3004', 'teaching_modalities_id' => 'BR30', 'seriations_name' => '4º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR3005', 'teaching_modalities_id' => 'BR30', 'seriations_name' => '5º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR3200', 'teaching_modalities_id' => 'BR32', 'seriations_name' => 'AEE - Sala de Recursos'],
            ['id' => 'BR3300', 'teaching_modalities_id' => 'BR33', 'seriations_name' => 'EEE - Educação Especial Exclusiva'],
            ['id' => 'BR3501', 'teaching_modalities_id' => 'BR35', 'seriations_name' => '1º Modulo'],
            ['id' => 'BR3502', 'teaching_modalities_id' => 'BR35', 'seriations_name' => '2º Modulo'],
            ['id' => 'BR3503', 'teaching_modalities_id' => 'BR35', 'seriations_name' => '3º Modulo'],
            ['id' => 'BR3504', 'teaching_modalities_id' => 'BR35', 'seriations_name' => '4º Modulo'],
            ['id' => 'BR3505', 'teaching_modalities_id' => 'BR35', 'seriations_name' => '5º Modulo'],
            ['id' => 'BR3506', 'teaching_modalities_id' => 'BR35', 'seriations_name' => '6º Modulo'],
            ['id' => 'BR3507', 'teaching_modalities_id' => 'BR35', 'seriations_name' => '7º Modulo'],
            ['id' => 'BR3508', 'teaching_modalities_id' => 'BR35', 'seriations_name' => '8º Modulo'],
            ['id' => 'BR3609', 'teaching_modalities_id' => 'BR36', 'seriations_name' => '1º Termo - 5ª Serie'],
            ['id' => 'BR3610', 'teaching_modalities_id' => 'BR36', 'seriations_name' => '2º Termo - 6ª Serie'],
            ['id' => 'BR3611', 'teaching_modalities_id' => 'BR36', 'seriations_name' => '3º Termo - 7ª Serie'],
            ['id' => 'BR3612', 'teaching_modalities_id' => 'BR36', 'seriations_name' => '4º Termo - 8ª Serie'],
            ['id' => 'BR3709', 'teaching_modalities_id' => 'BR37', 'seriations_name' => '1º Termo'],
            ['id' => 'BR3710', 'teaching_modalities_id' => 'BR37', 'seriations_name' => '2º Termo'],
            ['id' => 'BR3711', 'teaching_modalities_id' => 'BR37', 'seriations_name' => '3º Termo'],
            ['id' => 'BR4006', 'teaching_modalities_id' => 'BR40', 'seriations_name' => '6º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR4007', 'teaching_modalities_id' => 'BR40', 'seriations_name' => '7º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR4008', 'teaching_modalities_id' => 'BR40', 'seriations_name' => '8º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR4009', 'teaching_modalities_id' => 'BR40', 'seriations_name' => '9º Ano', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR5001', 'teaching_modalities_id' => 'BR50', 'seriations_name' => '1ª Serie', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR5002', 'teaching_modalities_id' => 'BR50', 'seriations_name' => '2ª Serie', 'seriations_info' => 'Fundacao Casa'],
            ['id' => 'BR5003', 'teaching_modalities_id' => 'BR50', 'seriations_name' => '2ª Serie', 'seriations_info' => 'Fundacao Casa'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('modalities_seriations');
    }
}
