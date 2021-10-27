<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alacaklar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Alacaklar', function (Blueprint $table) {
        $table->increments('alacak_id');
        $table->integer('user_id');
        $table->integer('cari_hesap_id');
        $table->date('alacak_baslangic_tarihi');
        $table->date('alacak_bitis_tarihi');
        $table->integer('para_turu_id');
        $table->integer('alacak_miktari');
        $table->text('aciklama')->nullable();
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
        Schema::dropIfExists('Alacaklar');
    }
}
