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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->uniqid();
            $table->text('cni');
            $table->date('naissance');
            $table->string('GroupeSanguin');
            $table->string('profession');
            $table->string('numeroprevenir');
            $table->string('sexe');
            $table->foreignId('pay_id')->constrained()->cascadeOnDelete();
            $table->foreignId('ville_id')->constrained()->cascadeOnDelete();
            $table->foreignId('quatier_id')->constrained()->cascadeOnDelete();
            $table->string('localisation');
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
        Schema::dropIfExists('patients');
    }
};
