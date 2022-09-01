<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTrainingsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('register_trainings', function (Blueprint $table) {
         $table->id();
         $table->string('nama');
         $table->string('email');
         $table->string('whatsapp');
         $table->string('instansi');
         $table->string('jabatan');
         $table->string('provinsi');
         $table->string('kota');
         $table->string('opsi');
         $table->string('pelatihan');
         $table->string('jadwal');
         $table->date('tanggal')->nullable();
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
      Schema::dropIfExists('register_trainings');
   }
}
