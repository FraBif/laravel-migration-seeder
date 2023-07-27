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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Azienda");
            $table->string("Stazione di Partenza");
            $table->string("Stazione di Arrivo");
            $table->dateTime("Orario di Partenza");
            $table->dateTime("Orario di Arrivo");
            $table->string("Codice Treno");
            $table->integer("Numero Carrozze");
            $table->boolean("In Orario");
            $table->boolean("Cancellato");
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
