<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void//crea tabla
    {
        // users: nombre de la tabla
        // Blueprint: crea las columnas de la tabla
        Schema::create('users', function (Blueprint $table) {
            $table->id();//integuer unsigned incremend
            $table->string('name', 150);//varchar 150 caracteres
            $table->string('email')->unique();//dato unico
            $table->timestamp('email_verified_at')->nullable();//guardar fechas, al realizar el registro se anula
            $table->string('password');
            $table->rememberToken();//genera un token de hasta si 100 caracteres
            $table->timestamps();//almacena fecha y hora que se registra
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void//revierte los cambios, rollback
    {
        Schema::dropIfExists('users');
    }
};
