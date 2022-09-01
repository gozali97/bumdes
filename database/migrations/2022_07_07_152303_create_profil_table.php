<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('profil', function (Blueprint $table) {
         $table->id();
         $table->foreignId('user_id')->constrained('users');
         $table->char('province_id', 2);
         $table->foreign('province_id')
            ->references('id')
            ->on('provinces')
            ->onUpdate('cascade')->onDelete('restrict');
         $table->char('city_id', 4);
         $table->foreign('city_id')
            ->references('id')
            ->on('provinces')
            ->onUpdate('cascade')->onDelete('restrict');
         $table->dateTime('tgl_lahir');
         $table->string('jekel');
         $table->string('nama_instansi');
         $table->string('jabatan');
         // $table->foreignId('province_id')->constrained('provinces');
         // $table->foreignId('city_id')->constrained('regencies');
         $table->string('no_telp');
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
      Schema::dropIfExists('profil');
   }
}
