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
        //atributos da tabela
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->string('comprimento', 55);
            $table->string('largura', 55);
            $table->string('altura', 55);
            $table->timestamps();
        });
        //
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('produto_detalhes');
        //
    }
};
