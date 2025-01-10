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
        Schema::create('centre_de_santes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();//
            $table->string('code_postal');//
            $table->string('name');//
            $table->string('Localisation');//
            $table->foreignId('ville_id')->constrained()->cascadeOnDelete();//
            $table->foreignId('pay_id')->constrained()->cascadeOnDelete();//
            $table->string('Numero_identification');
            $table->string('name_responsable');//
            $table->string('telephone_responsable');//
            $table->string('email_responsable');
            $table->foreignId('sous_categorie_id')->constrained()->cascadeOnDelete();//
            $table->boolean('confirmation_concentement');
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
        Schema::dropIfExists('centre_de_santes');
    }
};
