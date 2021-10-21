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
      <h2 class="text-center mb-4">Alacak Ekle</h2>
      <div class="auto-form-wrapper">

        <form action="{{route('alacakEkle')}}" method="post">
          @csrf
          <div class="form-group">
            <div class="input-group">
                  <select style="width: 100%;" name="hesapId" >
                    <option value="" disabled selected>Cari Hesap</option>
                    @foreach ($cariHesaplar as $hesap)
                      <option value="{{$hesap['cari_hesap_id']}}">{{$hesap['kullanici_ad']." ".$hesap['kullanici_soyad']." (".$hesap['kullanici_kurum'].")"}}</option>
                    @endforeach
                  </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input placeholder="Alacak Başlangıç Tarihi" class="form-control" type="text" onfocus="(this.type='date')" name="alacakBaslangic">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input placeholder="Alacak Bitiş Tarihi" class="form-control" type="text" onfocus="(this.type='date')" name="alacakBitis">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
                  <select style="width: 100%;" name="paraTuruId" >
                    <option value="" disabled selected>Para Türü</option>
                    @foreach ($paraTurleri as $paraTuru)
                      <option value="{{$paraTuru['para_turu_id']}}">{{$paraTuru['para_turu']}}</option>
                    @endforeach
                  </select>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <input placeholder="Alacak Miktarı" class="form-control" type="number" name="alacakMiktari">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <textarea type="text" class="form-control" placeholder="Açıklama" name="aciklama"></textarea>
              <div class="input-group-append">
              </div>
            </div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Alacak Ekle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')


@endsection
