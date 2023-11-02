<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('cliente')) {
            Schema::create('cliente', function (Blueprint $table) {
           
                $table->increments('id');
                $table->string('nome');
                $table->string('login');
                $table->string('senha');
                $table->timestamps();
                
            });
        }

        
        if (!Schema::hasTable('atendente')) {
            Schema::create('atendente', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome');
                $table->string('login');
                $table->string('senha');
                $table->timestamps();
            });
        }

      
        if (!Schema::hasTable('gravacao')) {
            Schema::create('gravacao', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('id_cliente');
                $table->unsignedInteger('id_atendente');
                $table->foreign('id_cliente')->references('id')->on('cliente');
                $table->foreign('id_atendente')->references('id')->on('atendente');
                $table->timestamps();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('cliente');
        Schema::drop('atendente');
        Schema::drop('gravacao');
    }
};
