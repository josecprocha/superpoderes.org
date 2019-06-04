<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleKinshipsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kinships', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->primary();
            $table->string('kinship_description');
            $table->softDeletes();
        });

        DB::table('people_kinships')->insert([
            ['id' => 1, 'kinship_description' => 'Parent (ascending 1st degree)'],
            ['id' => 2, 'kinship_description' => 'Stepfather or stepmother (1st degree per affinity)'],
            ['id' => 3, 'kinship_description' => 'Grandfather or grandmother (2nd degree)'],
            ['id' => 4, 'kinship_description' => 'Brother or sister (2nd degree collateral)'],
            ['id' => 5, 'kinship_description' => 'Brother-in-law or sister-in-law (2nd degree by affinity)'],
            ['id' => 6, 'kinship_description' => 'Great-grandfather or great-grandmother'],
            ['id' => 7, 'kinship_description' => 'Uncle or aunt (3rd degree collateral)'],
            ['id' => 8, 'kinship_description' => 'Nephew or niece (3rd degree collateral)'],
            ['id' => 9, 'kinship_description' => 'Great-grandparents, uncles grandparents, cousins or nephews grandchildren'],
            ['id' => 10, 'kinship_description' => 'Other relative'],
            ['id' => 11, 'kinship_description' => 'Caregiver'],
            ['id' => 12, 'kinship_description' => 'Lives in the same house'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kinships');
    }
}
