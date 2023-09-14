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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            //Azienda
            $table->string('company', 64);

            //Stazione di partenza
            $table->string('dep_station', 64);

            //Stazione di arrivo
            $table->string('arr_station' , 64);

            //Orario di partenza
            $table->dateTime('dep_timestamp');
            

            //Orario di arrivo
            $table->dateTime('arr_timestamp');
            

            //Codice Treno
            $table->string('code' , 8)->unique();

            //Numero Carrozze
            $table->unsignedTinyInteger('train_cars_number');

            //In orario
            $table->boolean('in_time')->default(true);

            //Cancellato
            $table->boolean('deleted')->default(false);

            $table->string('da_eliminare')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
