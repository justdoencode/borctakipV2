<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\VeritabaniController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/table', function () {
    return view('pages.table');
});


Route::get('/borceklepage', function () {
    return view('pages.borc_ekle');
});


Route::get('/buttons', function () {
    return view('pages.button');
});

Route::get('/borclistesipage', function () {
    return view('pages.borc_listesi');
});



///////GeneralController/////////
Route::get('/carihesapeklepage',[GeneralController::class,'cariHesapEklePage'])->name('cariHesapEklePage');
Route::get('/paraturueklepage',[GeneralController::class,'paraTuruEklePage'])->name('paraTuruEklePage');



///////VeritabaniController/////////

//Ekleme İşlemleri//
Route::post('/carihesapekle',[VeritabaniController::class,'cariHesapEkle'])->name('cariHesapEkle');//Cari Hesap Ekle
Route::post('/borcekle',[VeritabaniController::class,'borcEkle'])->name('borcEkle');//Borç Ekle
Route::post('/paraturuekle',[VeritabaniController::class,'paraTuruEkle'])->name('paraTuruEkle');//Para Türü Ekle
Route::post('/alacakekle',[VeritabaniController::class,'alacakEkle'])->name('alacakEkle');//Alacak Ekle


//Listeleme İşlemleri//
Route::get('/carihesaplarpage',[VeritabaniController::class,'cariHesapListele'])->name('cariHesapListele');//Cari Hesaplar Sayfası
Route::get('/borceklepage',[VeritabaniController::class,'borcEklePage'])->name('borcEklePage');//Borç Ekleme Sayfası
Route::get('/borclarpage',[VeritabaniController::class,'borcListele'])->name('borclarPage');//Borçlar Sayfası
Route::get('/alacaklarpage',[VeritabaniController::class,'alacakListele'])->name('alacaklarPage');//Alacaklar Sayfası
Route::get('/alacakeklepage',[VeritabaniController::class,'alacakEklePage'])->name('alacakEklePage');//Alacak Ekleme Sayfası
Route::get('/paraturleripage',[VeritabaniController::class,'paraTurleriListele'])->name('paraTurleriPage');//Para Türleri Sayfası
Route::get('/carihesapdetaypage/{cari_hesap_id}',[VeritabaniController::class,'cariHesapDetayListele'])->name('cariHesapDetayPage');//Borçlu Detay Sayfası
Route::get('/borcdetaypage/{borc_id}',[VeritabaniController::class,'borcDetayListele'])->name('borcDetayPage');//Borçlu Detay Sayfası
Route::get('/alacakdetaypage/{alacak_id}',[VeritabaniController::class,'alacakDetayListele'])->name('alacakDetayPage');//Borçlu Detay Sayfası


//Silme İşlemleri//
Route::get('/carihesapsil/{cari_hesap_id}',[VeritabaniController::class,'cariHesapSil'])->name('cariHesapSil');//Borçlu Silme
Route::get('/borcsil/{borc_id}',[VeritabaniController::class,'borcSil'])->name('borcSil');//Borç Silme
Route::get('/alacaksil/{alacak_id}',[VeritabaniController::class,'alacakSil'])->name('alacakSil');//Alacak Silme
Route::get('/paraturusil/{para_turu_id}',[VeritabaniController::class,'paraTuruSil'])->name('paraTuruSil');//Para Türü Silme



//Diğer İşlemler
Route::post('/borduzenle',[VeritabaniController::class,'borcDuzenle'])->name('borcDuzenle');//Para Türleri Sayfası
