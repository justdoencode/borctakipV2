@extends('layouts.master')

@section('content')
<div class="">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <h2 class="text-center mb-4">Borç Ekle</h2>
      <div class="auto-form-wrapper">

        <form action="{{route('borcEkle')}}" method="post">
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
              <input placeholder="Borç Başlangıç Tarihi" class="form-control" type="text" onfocus="(this.type='date')" name="borcBaslangic">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input placeholder="Borç Bitiş Tarihi" class="form-control" type="text" onfocus="(this.type='date')" name="borcBitis">
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
              <input placeholder="Borç Miktarı" class="form-control" type="number" name="borcMiktari">
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
            <button class="btn btn-primary submit-btn btn-block">Borç Ekle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')


@endsection
