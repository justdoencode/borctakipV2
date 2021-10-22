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
      <h4 class="card-title"><b>Alacak Detay</b></h4>
      <form method="post" action="{{route('alacakDuzenle')}}">
        @csrf
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
        <div class="form-group">
          <div class="input-group">
            <div col-md-6>
              <div style="display:none;"></div>
              <input placeholder="Alacak Miktarını Güncelle" class="form-control" type="number" name="miktar">
              <input class="form-control" type="number" name="alacakId" value="{{$alacak->alacak_id}}" style="display:none;"><!--Alacak id almak için-->
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
