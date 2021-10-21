@extends('layouts.master')

@section('content')
<div class="">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      @if(session()->has('errorMessage'))
          <div class="alert alert-danger">
            {{ session()->get('errorMessage') }}
          </div>
      @endif
      @if(session()->has('successMessage'))
          <div class="alert alert-success">
            {{ session()->get('successMessage') }}
          </div>
      @endif
      <h2 class="text-center mb-4">Cari Hesap Ekle</h2>
      <div class="auto-form-wrapper">

        <form action="{{route('cariHesapEkle')}}" method="post">
          @csrf
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="İsim" name="cari_ad">
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Soyisim" name="cari_soyad">
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Kurum" name="cari_kurum">
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="number" class="form-control" placeholder="Telefon" name="cari_telefon">
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <textarea type="text" class="form-control" placeholder="Adres" name="cari_adres"></textarea>
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" name="btn_borcluekle" class="btn btn-primary submit-btn btn-block" value="Hesap Ekle">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
