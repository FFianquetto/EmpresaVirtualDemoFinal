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

        // Tabla 'registro' (usuarios)
        Schema::create('registro', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('contrasena');
            $table->integer('edad');
            $table->timestamps();
        });

        // Tabla 'conversaciones'
        Schema::create('conversaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registro_id_emisor')->constrained('registro')->onDelete('cascade');
            $table->foreignId('registro_id_receptor')->constrained('registro')->onDelete('cascade');
            $table->text('mensaje');
            $table->timestamp('enviado_en')->useCurrent();
        });

        // Tabla 'publicaciones'
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registro_id')->constrained('registro')->onDelete('cascade');
            $table->string('titulo');
            $table->text('contenido');

            // Relación opcional a una conversación iniciada con el autor
            $table->foreignId('conversacion_id')
                ->nullable()
                ->constrained('conversaciones')
                ->nullOnDelete(); // Si se borra la conversación, se pone null

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicaciones');
        Schema::dropIfExists('conversaciones');
        Schema::dropIfExists('registro');
    }
};
