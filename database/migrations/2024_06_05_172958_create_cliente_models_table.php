<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tblclientes')) {
            Schema::create('tblclientes', function (Blueprint $table) {
                $table->bigIncrements('idCliente');
                $table->string('nomeCliente');
                $table->string('telefoneCliente');
                $table->string('emailCliente')->unique();
                $table->string('senhaCliente');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblclientes');
    }
};

