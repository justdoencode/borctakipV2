@extends('layouts.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
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
      <h4 class="card-title"><b>Borç Detay</b></h4>
      <form method="post" action="{{route('borcDuzenle')}}">
        @csrf
      <div class="table-responsive">

        <table class="table table-bordered">
          <thead>
          </thead>
          <tbody>
            <tr>
              <td><b> Cari Hesap :</b></td>
              <td> {{$borc->getCariHesap->kullanici_ad." ".$borc->getCariHesap->kullanici_soyad}} </td>
            </tr>

            <tr>
              <td><b> Borç Başlangıç Tarihi :</b></td>
              <td> {{$borc->borc_baslangic_tarihi}} </td>
            </tr>

            <tr>
              <td><b> Borç Bitiş Tarihi :</b></td>
              <td> {{$borc->borc_bitis_tarihi}} </td>
            </tr>

            <tr>
              <td><b> Para Türü :</b></td>
              <td> {{$borc->getParaTuru->para_turu}} </td>
            </tr>

            <tr>
              <td><b> Borç Miktarı :</b></td>
              <td> {{$borc->borc_miktari}} </td>
            </tr>

            <tr>
              <td><b> Açıklama :</b></td>
              <td> {{$borc->aciklama}} </td>
            </tr>
          </tbody>
        </table>
        <div class="form-group">
          <div class="input-group">
            <div col-md-6>
              <div style="display:none;"></div>
              <input placeholder="Borç Miktarını Güncelle" class="form-control" type="number" name="miktar">
              <input class="form-control" type="number" name="borcId" value="{{$borc->borc_id}}" style="display:none;"><!--Borç id almak için-->
            </div>
            <input type="submit" class="btn btn-outline-success" value="Güncelle">
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
