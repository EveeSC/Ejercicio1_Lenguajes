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
        Schema::create('duenios', function (Blueprint $table) {
            $table->id('idDuenio');
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->string('correo',30);
            $table->string('telefono',8);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duenios');
    }
};
