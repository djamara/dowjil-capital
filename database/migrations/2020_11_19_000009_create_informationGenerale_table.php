<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationgeneraleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'informationGenerale';

    /**
     * Run the migrations.
     * @table informationGenerale
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idinformationGenerale');
            $table->string('email', 45)->nullable();
            $table->string('contact', 45)->nullable();
            $table->string('lieuGeographique', 45)->nullable();
            $table->string('boitePostal', 45)->nullable();
            $table->string('logo', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
