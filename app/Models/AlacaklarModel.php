<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlacaklarModel extends Model
{
    use HasFactory;


    protected $primaryKey='alacak_id';
    protected $table='Alacaklar';
    protected $fillable=['user_id','cari_hesap_id','alacak_baslangic_tarihi','alacak_bitis_tarihi','para_turu_id','alacak_miktari','aciklama'];


    public function getCariHesap(){
        return $this->hasOne('App\Models\CariHesaplarModel','cari_hesap_id','cari_hesap_id');
    }

    public function getParaTuru(){
        return $this->hasOne('App\Models\ParaTurleriModel','para_turu_id','para_turu_id');
    }
}
