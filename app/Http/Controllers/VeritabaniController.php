<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParaTurleriModel;
use App\Models\BorclarModel;
use App\Models\AlacaklarModel;
use App\Models\CariHesaplarModel;

class VeritabaniController extends Controller
{

    ///////EKLEME İŞLEMLERİ///////

    //Cari Hesap Ekleme
    public function cariHesapEkle(Request $hesap){

      $telefonData=CariHesaplarModel::firstWhere('kullanici_telefon',$hesap->cari_telefon);
      if(empty($telefonData)==true){
        CariHesaplarModel::create([
          "user_id"=>auth()->user()->user_id,
          "kullanici_ad"=>$hesap->cari_ad,
          "kullanici_soyad"=>$hesap->cari_soyad,
          "kullanici_telefon"=>$hesap->cari_telefon,
          "kullanici_adres"=>$hesap->cari_adres,
          "kullanici_kurum"=>$hesap->cari_kurum,
        ]);

        return redirect()->back()->with('successMessage', 'Başarıyla Eklendi');
      }
      return redirect()->back()->with('errorMessage', 'Girilen Telefon Numarasıyla Kayıtlı Hesap Bulunmaktadır!');

    }



    //Borc Ekleme
    public function borcEkle(Request $borc){
      BorclarModel::create([
        "user_id"=>auth()->user()->user_id,
        "cari_hesap_id"=>$borc->hesapId,
        "borc_baslangic_tarihi"=>$borc->borcBaslangic,
        "borc_bitis_tarihi"=>$borc->borcBitis,
        "para_turu_id"=>$borc->paraTuruId,
        "borc_miktari"=>$borc->borcMiktari,
        "aciklama"=>$borc->aciklama,
      ]);

      return redirect()->back()->with('successMessage', 'Borç Başarıyla Eklendi');

    }

    //Para Türü Ekle
    public function paraTuruEkle(Request $paraTuru){
      $paraTuruData=ParaTurleriModel::firstWhere('para_turu',$paraTuru->paraTuru);
      if(empty($paraTuruData)){
        $paraTuruBuyuk=mb_strtoupper($paraTuru->paraTuru,"UTF-8");
        ParaTurleriModel::create([
          "user_id"=>auth()->user()->user_id,
          "para_turu"=>$paraTuruBuyuk,
        ]);
        return redirect()->back()->with('successMessage', 'Para Türü Başarıyla Eklendi');
      }
      return redirect()->back()->with('errorMessage', 'Eklemek İstediğiniz Para Türü Zaten Mevcut!');
    }


    //Alacak Ekleme
    public function alacakEkle(Request $alacak){
      AlacaklarModel::create([
        "user_id"=>auth()->user()->user_id,
        "cari_hesap_id"=>$alacak->hesapId,
        "alacak_baslangic_tarihi"=>$alacak->alacakBaslangic,
        "alacak_bitis_tarihi"=>$alacak->alacakBitis,
        "para_turu_id"=>$alacak->paraTuruId,
        "alacak_miktari"=>$alacak->alacakMiktari,
        "aciklama"=>$alacak->aciklama,
      ]);

      return redirect()->back()->with('successMessage', 'Alacak Başarıyla Eklendi');

    }




    ///////LİSTELEME İŞLEMLERİ///////


    //Borçluları Listeleme
    public function cariHesapListele(){
      $cariHesaplar=CariHesaplarModel::where('user_id',auth()->user()->user_id)->get();
      return view('pages.cari_hesap_listesi',array('cariHesaplar'=>$cariHesaplar));
  }




  //Borç Ekle Sayfasında Borçluları ve Para Türlerini listeleme
  public function borcEklePage(){
    $cariHesaplar=CariHesaplarModel::where('user_id',auth()->user()->user_id)->get();
    $paraTurleri=ParaTurleriModel::where('user_id',auth()->user()->user_id)->get();
    return view('pages.borc_ekle',array('cariHesaplar'=>$cariHesaplar,'paraTurleri'=>$paraTurleri));
    }


    //Borçları Listeleme
    public function borcListele(){
      $borclar=BorclarModel::where('user_id',auth()->user()->user_id)->get();
      return view('pages.borc_listesi',array('borclar'=>$borclar));
  }


  //Alacak Ekle Sayfasında Alacaklıları ve Para Türlerini Listeleme
  public function alacakEklePage(){
    $cariHesaplar=CariHesaplarModel::where('user_id',auth()->user()->user_id)->get();
    $paraTurleri=ParaTurleriModel::where('user_id',auth()->user()->user_id)->get();
    return view('pages.alacak_ekle',array('cariHesaplar'=>$cariHesaplar,'paraTurleri'=>$paraTurleri));
    }


    //Alacakları Listeleme
    public function alacakListele(){
      $alacaklar=AlacaklarModel::where('user_id',auth()->user()->user_id)->get();
      return view('pages.alacak_listesi',array('alacaklar'=>$alacaklar));
  }


  //Para Türlerini Listeleme
  public function paraTurleriListele(){
    $paraTurleri=ParaTurleriModel::where('user_id',auth()->user()->user_id)->get();
    return view('pages.para_turu_listesi',array('paraTurleri'=>$paraTurleri));
}






//Cari Hesap Detay Sayfası
public function cariHesapDetayListele(int $cari_hesap_id){
  $paraTurleri=ParaTurleriModel::get();

  //Para Türlei Id lerini alma
  $paraTuruIds=array();
  foreach ($paraTurleri as $paraTuru) {
    array_push($paraTuruIds,$paraTuru->para_turu_id);
  }
  $toplamBorclar=array();
  $borclar=BorclarModel::where('cari_hesap_id', $cari_hesap_id)->get();
  //Borç Toplamlarını Bulma
  foreach ($paraTuruIds as $id) {//Para Türlerini gezer
    $toplamBorc=0;
    foreach ($borclar as $borc) {//Borçları Gezer
      if($borc->para_turu_id==$id){//Gelen Para Türüne Göre Borcu Bulur
        $toplamBorc+=$borc->borc_miktari;//para türüne göre borçları toplar
      }
    }
    array_push($toplamBorclar,$toplamBorc);
  }
  //Alacak Toplamlarını Bulma
  $toplamAlacaklar=array();
  $alacaklar=AlacaklarModel::where('cari_hesap_id', $cari_hesap_id)->get();

  foreach ($paraTuruIds as $id) {//Para Türlerini gezer
    $toplamAlacak=0;
    foreach ($alacaklar as $alacak) {//Alacakları Gezer
      if($alacak->para_turu_id==$id){//Gelen Para Türüne Göre Alacağı Bulur
        $toplamAlacak+=$alacak->alacak_miktari;//para türüne göre alacakları toplar
      }
    }
    array_push($toplamAlacaklar,$toplamAlacak);
  }
  $cariHesap=CariHesaplarModel::find($cari_hesap_id);

  $borclar=BorclarModel::Where('cari_hesap_id',$cari_hesap_id)->get();
  $alacaklar=AlacaklarModel::Where('cari_hesap_id',$cari_hesap_id)->get();

  return view('pages.cari_hesap_detay',array('cariHesap'=>$cariHesap,
  'paraTurleri'=>$paraTurleri,'toplamBorclar'=>$toplamBorclar,
  'toplamAlacaklar'=>$toplamAlacaklar,'alacaklar'=>$alacaklar,'borclar'=>$borclar));
}




//Borç Detay Sayfası
public function borcDetayListele(int $borc_id){

  $borc=BorclarModel::find($borc_id);
  return view('pages.borc_detay',array('borc'=>$borc));
}


//Alacak Detay Sayfası
public function alacakDetayListele(int $alacak_id){

  $alacak=AlacaklarModel::find($alacak_id);
  return view('pages.alacak_detay',array('alacak'=>$alacak));
}





  ///////SİLME İŞLEMLERİ///////

    //Borçlu Silme İşlemi
    public function cariHesapSil(int $cari_hesap_id){

      $borc=BorclarModel::firstWhere('cari_hesap_id',$cari_hesap_id);
      $alacak=AlacaklarModel::firstWhere('cari_hesap_id',$cari_hesap_id);

      if(empty($borc)==false || empty($alacak)==false){
        return redirect()->back()->with('errorMessage', 'Borcu ya da Alacağı Olan Cari Hesap Silinemez!');
      }
      CariHesaplarModel::where('cari_hesap_id',$cari_hesap_id)->delete();
      return redirect()->back()->with('successMessage', 'Cari Hesap Başarıyla Silindi');
    }


    //Borç Silme İşlemi
    public function borcSil(int $borc_id){

      BorclarModel::where('borc_id',$borc_id)->delete();
      return redirect()->back()->with('successMessage', 'Borç Başarıyla Silindi');
    }


    //Alacak Silme İşlemi
    public function alacakSil(int $alacak_id){

      AlacaklarModel::where('alacak_id',$alacak_id)->delete();
      return redirect()->back()->with('successMessage', 'Alacak Başarıyla Silindi');
    }

    //Para Türü Silme İşlemi
    public function paraTuruSil(int $para_turu_id){

      $borc=BorclarModel::firstWhere('para_turu_id',$para_turu_id);
      $alacak=AlacaklarModel::firstWhere('para_turu_id',$para_turu_id);


      if(empty($borc)==false || empty($alacak)==false){
        return redirect()->back()->with('errorMessage', 'Para Türü Kullanımda Olduğu İçin Silinemez!');
      }
      ParaTurleriModel::where('para_turu_id',$para_turu_id)->delete();
      return redirect()->back()->with('successMessage', 'Para Türü Başarıyla Silindi');
    }




    //DİĞER İŞLEMLER

    //Borç Düzenleme İşlemi
    public function borcDuzenle(Request $veriler){
      BorclarModel::Where('borc_id',$veriler->borcId)->update(['borc_miktari'=>$veriler->miktar]);
      return redirect()->back()->with('successMessage', 'Borç Miktarı Başarıyla Güncellendi');
    }
    //Alcak Düzenleme İşlemi
    public function alacakDuzenle(Request $veriler){
      AlacaklarModel::Where('alacak_id',$veriler->alacakId)->update(['alacak_miktari'=>$veriler->miktar]);
      return redirect()->back()->with('successMessage', 'Alacak Miktarı Başarıyla Güncellendi');
    }

}
