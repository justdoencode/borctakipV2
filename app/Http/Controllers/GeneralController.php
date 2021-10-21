<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function cariHesapEklePage(){
      return view('pages.cari_hesap_ekle');
    }


    public function paraTuruEklePage(){
      return view('pages.para_turu_ekle');
    }
}
