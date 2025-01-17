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
        Schema::create('conptes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('affectation_id')->constrained();
            $table->foreignId('personnel_id')->constrained();
            $table->foreignId('centre_de_sante_id')->constrained();
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
        Schema::dropIfExists('conptes');
    }
};
