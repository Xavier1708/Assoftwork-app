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
        Schema::create('numero_recargas', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('type');
            $table->foreignId('clientes_id')
            ->constrained()
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numero_recargas');
    }
};
