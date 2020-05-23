<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorsTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('autors', function (Blueprint $table) {
   $table->id();
   $table->timestamps();
   $table->string('PrimeiroNome');
   $table->string('UltimoNome');
   $table->string('Telefone')->nullable();
  });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
  Schema::dropIfExists('autors');
 }
}
