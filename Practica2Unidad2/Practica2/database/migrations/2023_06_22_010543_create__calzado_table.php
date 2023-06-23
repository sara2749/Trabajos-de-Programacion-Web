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
        Schema::create('_calzado', function (Blueprint $table) {
            $table->id();
            $table->string('Marca')->nullable();
            $table->string('Categoria')->nullable();
            $table->float('Talla')->nullable();
            $table->string('Color')->nullable();
            $table->float('Precio')->nullable();
            $table->integer('stock')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_calzado');
    }
};
