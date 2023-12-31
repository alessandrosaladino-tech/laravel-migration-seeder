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
             $table->string('image');
             $table->string('azienda', 50);
             $table->string('stazione_di_partenza', 100);
             $table->string('stazione_di_arrivo', 100);
             $table->decimal('price', 10, 2);
             $table->dateTime('orario_di_partenza');
             $table->dateTime('orario_di_arrivo');
             $table->smallInteger('codice_treno');
             $table->tinyInteger('numero_carrozze');
             $table->boolean('in_orario')->nullable()->default(1);
             $table->boolean('cancellato')->nullable()->default(0);
             $table->timestamps();
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
