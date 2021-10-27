<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CariHesaplar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('CariHesaplar', function (Blueprint $table) {
          $table->increments('cari_hesap_id');
          $table->integer('user_id');
          $table->string('kullanici_ad',50);
          $table->string('kullanici_soyad',50);
          $table->string('kullanici_telefon',12);
          $table->string('kullanici_adres')->nullable();
          $table->string('kullanici_kurum')->nullable();
          $table->integer('alacak_toplam')->default(0);
          $table->integer('borc_toplam')->default(0);
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
        Schema::dropIfExists('CariHesaplar');
    }

}
