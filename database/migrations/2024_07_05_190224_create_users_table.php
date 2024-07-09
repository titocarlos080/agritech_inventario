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
        Schema::create('users', function (Blueprint $table) {
            $table->id('usuario_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('password_resset')->nullable();
            $table->string('img_url');
            $table->foreignId('rol_id')->constrained('roles', 'rol_id');
            $table->rememberToken(); // Este campo crea la columna remember_token
            $table->timestamps();
        });

        

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        
    }
};
