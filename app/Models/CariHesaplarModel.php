<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CariHesaplarModel extends Model
{
    use HasFactory;

    protected $primaryKey='cari_hesap_id';
    protected $table='CariHesaplar';
    protected $fillable=['kullanici_ad','kullanici_soyad','kullanici_telefon','kullanici_adres','kullanici_kurum','alacak_toplam','borc_toplam'];
}
