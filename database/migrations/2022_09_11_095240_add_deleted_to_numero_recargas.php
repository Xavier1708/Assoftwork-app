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
        Schema::table('numero_recargas', function (Blueprint $table) {
            //
            $table->boolean('deleted')->default('1')->after('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('numero_recargas', function (Blueprint $table) {
            //
            $table -> dropColumn('deleted');
        });
    }
};
