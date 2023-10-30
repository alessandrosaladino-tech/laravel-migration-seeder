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
             $table->string('azienda', 50);
             $table->string('Stazione di partenza', 100);
             $table->string('Stazione di arrivo', 100);
             $table->decimal('price', 10, 2);
             $table->date('Orario di partenza');
             $table->date('Orario di arrivo');
             $table->smallInteger('Codice Treno');
             $table->tinyInteger('Numero Carrozze');
             $table->boolean('In orario')->default(1);
             $table->boolean('Cancellato')->default(0);
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
