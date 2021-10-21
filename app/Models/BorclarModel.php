<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorclarModel extends Model
{
    use HasFactory;

    protected $primaryKey='borc_id';
    protected $table='Borclar';
    protected $fillable=['cari_hesap_id','borc_baslangic_tarihi','borc_bitis_tarihi','para_turu_id','borc_miktari','aciklama'];


    public function getCariHesap(){
        return $this->hasOne('App\Models\CariHesaplarModel','cari_hesap_id','cari_hesap_id');
    }

    public function getParaTuru(){
        return $this->hasOne('App\Models\ParaTurleriModel','para_turu_id','para_turu_id');
    }
}
