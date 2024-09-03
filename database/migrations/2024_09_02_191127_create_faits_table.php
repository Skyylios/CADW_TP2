<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaitsTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faits', function (Blueprint $table) {
            $table->id();
            $table->text('fait');
            $table->integer('longueur');
            $table->timestamps();
        });
    }

    /**
     * Réinverser la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faits');
    }
}
