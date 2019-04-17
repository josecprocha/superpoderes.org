<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalEvaluationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('educational_evaluations', function (Blueprint $table) {
      $table->char('id', 4)->primary(); // country + two number (evaluation id)
      $table->foreign('countries_id')->references('id')->on('countries');
      $table->foreign('languages_id')->references('id')->on('languages');
      $table->year('first_year');
      $table->string('evaluation_title');
      $table->text('evaluation_description');
      $table->string('webpage');
      $table->boolean('in_use');
    });

    DB::table('educational_evaluations')->insert([
      ['id' => 'BR00' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '2017', 'evaluation_title' => 'Base Nacional Comum Curricular (BNCC)', 'evaluation_description' => 'Documento normativo que define o conjunto de aprendizagens essenciais que todos os alunos devem desenvolver ao longo das etapas e modalidades da Educação Básica', 'webpage' => 'http://basenacionalcomum.mec.gov.br', 'in_use' => true],
      ['id' => 'BR01' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '1990', 'evaluation_title' => 'Sistema de Avaliação da Educação Básica (Saeb)', 'evaluation_description' => 'Criado em 1990, passou a ser composto por duas avaliações a partir de 2005: Aneb e Anresc.', 'webpage' => 'http://portal.inep.gov.br/educacao-basica/saeb', 'in_use' => true],
      ['id' => 'BR02' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '1997', 'evaluation_title' => 'Parâmetros Curriculares Nacionais', 'evaluation_description' => 'Criado em 1997, são propostas para o ensino Fundamental, e não uma política de avaliação.', 'webpage' => 'http://portal.mec.gov.br/expansao-da-rede-federal/195-secretarias-112877938/seb-educacao-basica-2007048997/12640-parametros-curriculares-nacionais-1o-a-4o-series', 'in_use' => false], // http://portal.mec.gov.br/pnaes/195-secretarias-112877938/seb-educacao-basica-2007048997/12657-parametros-curriculares-nacionais-5o-a-8o-series
      ['id' => 'BR03' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '1998', 'evaluation_title' => 'Exame Nacional do Ensino Médio (Enem)', 'evaluation_description' => 'Criado em 1998, é utilizado para avaliar a qualidade do ensino médio e para acesso ao ensino superior em universidades públicas brasileiras, através do Sistema de Seleção Unificada (SiSU), assim como algumas universidades no exterior.', 'webpage' => 'https://enem.inep.gov.br/', 'in_use' => true],
      ['id' => 'BR04' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '1999', 'evaluation_title' => 'Referencial Curricular Nacional para a Educação Infantil (RCNEI)', 'evaluation_description' => 'material desenvolvido para aproximar a prática escolar às orientações expressas nas Diretrizes Curriculares Nacionais. Trata-se de uma ferramenta de estímulo à reflexão, e não de um manual a ser seguido.', 'webpage' => '', 'in_use' => false],
      ['id' => 'BR05' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '2002', 'evaluation_title' => 'Programa Internacional de Avaliação de Alunos (PISA)', 'evaluation_description' => 'É uma rede mundial de avaliação de desempenho escolar, realizado pela primeira vez em 2000 e repetido a cada três anos. É coordenado pela Organização para a Cooperação e Desenvolvimento Econômico (OCDE), com vista a melhorar as políticas e resultados educacionais.', 'webpage' => 'http://portal.inep.gov.br/pisa', 'in_use' => true],
      ['id' => 'BR06' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '2002', 'evaluation_title' => 'Exame Nacional para Certificação de Competências de Jovens e Adultos (Encceja)', 'evaluation_description' => 'Realizado desde 2002 pelo INEP, é um exame gratuito e voluntário que concede certificados de conclusão do EF e EM a nível nacional para para jovens e adultos fora da idade escolar adequada e para detentos.', 'webpage' => 'http://portal.mec.gov.br/encceja', 'in_use' => true],
      ['id' => 'BR07' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '2005', 'evaluation_title' => 'Avaliação Nacional do Rendimento Escolar (Anresc/Prova Brasil) e Avaliação Nacional da Educação Básica (Aneb)', 'evaluation_description' => 'Criadas em 2005, a Anresc (Prova Brasil) é censitária e avalia o 5º e 9º ano do EF em escolas públicas com 20 ou mais alunos matriculados. A Aneb é amostral, e uso os memsos instrumentos da Prova Brasil/Anresc.', 'webpage' => 'http://portal.inep.gov.br/educacao-basica/saeb/sobre-a-anresc-prova-brasil-aneb', 'in_use' => false],
      ['id' => 'BR08' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '2007', 'evaluation_title' => 'Provinha Brasil', 'evaluation_description' => 'Avaliação aplicada aos alunos matriculados no 2º ano do ensino fundamental para verificar a alfabetização e o letramento.', 'webpage' => 'http://portal.inep.gov.br/provinha-brasil', 'in_use' => true],
      ['id' => 'BR09' , 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'first_year' => '2013', 'evaluation_title' => 'Avaliação Nacional da Alfabetização (ANA)', 'evaluation_description' => 'é uma avaliação externa que objetiva aferir os níveis de alfabetização e letramento em Língua Portuguesa (leitura e escrita) e Matemática dos estudantes do 3º ano do Ensino Fundamental das escolas públicas.', 'webpage' => 'http://portal.inep.gov.br/educacao-basica/saeb/sobre-a-ana', 'in_use' => false]
    ]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('educational_evaluations');
  }
}
