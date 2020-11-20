<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborateurTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'collaborateur';

    /**
     * Run the migrations.
     * @table collaborateur
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('collaborateur_id');
            $table->string('collaborateur_nom')->nullable();
            $table->string('collaborateur_prenom')->nullable();
            $table->string('collaborateur_contact', 50)->nullable();
            $table->string('collaborateur_email', 45)->nullable();
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
