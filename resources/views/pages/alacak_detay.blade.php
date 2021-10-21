@extends('layouts.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><b>Alacak Detay</b></h4>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          </thead>
          <tbody>

            <tr>
              <td><b> Alacaklı :</b></td>
              <td> {{$alacak->getCariHesap->kullanici_ad." ".$alacak->getCariHesap->kullanici_soyad}} </td>
            </tr>

            <tr>
              <td><b> Alacak Başlangıç Tarihi :</b></td>
              <td> {{$alacak->alacak_baslangic_tarihi}} </td>
            </tr>

            <tr>
              <td><b> Alacak Bitiş Tarihi :</b></td>
              <td> {{$alacak->alacak_bitis_tarihi}} </td>
            </tr>

            <tr>
              <td><b> Para Türü :</b></td>
              <td> {{$alacak->getParaTuru->para_turu}} </td>
            </tr>

            <tr>
              <td><b> Alacak Miktarı :</b></td>
              <td> {{$alacak->alacak_miktari}} </td>
            </tr>

            <tr>
              <td><b> Açıklama :</b></td>
              <td> {{$alacak->aciklama}} </td>
            </tr>
          </tbody>
        </table>
        <div class="form-group" method='post' action=''>
          <div class="input-group">
            <div col-md-6>
              <input placeholder="Alacak Miktarını Düzenle" class="form-control" type="number" name="miktar">
            </div>
            <a type="submit" class="btn btn-outline-success" href="#">Alacak Miktarını Kaydet</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
