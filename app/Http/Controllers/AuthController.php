<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UsersModel;

class AuthController extends Controller
{

    //Login İşlemi
    public function login(Request $veriler){
      if (Auth::attempt(['email'=>$veriler->email,'password'=>$veriler->sifre])) {
         return view('dashboard');
      }
      return redirect()->back()->with('errorMessage', 'Email veya Parola Hatalı!');
    }



    //Register İşlemi
    public function register(Request $bilgiler){

      $user=UsersModel::firstWhere('email',$bilgiler->email);

      if(empty($user)){
        UsersModel::create([
          'first_name'=>$bilgiler->isim,
          'last_name'=>$bilgiler->soyisim,
          'email'=>$bilgiler->email,
          'password'=>bcrypt($bilgiler->parola),
        ]);

        return redirect()->back()->with('successMessage','Kullanıcı Başarıyla Eklendi');
      }
      return redirect()->back()->with('errorMessage','Girilen Email Adresine Kayıtlı Kullanıcı Mevcut');
    }



    //Logout İşlemi
    public function logout(){
      Auth::logout();
      return redirect()->route('loginPage');
    }
}
