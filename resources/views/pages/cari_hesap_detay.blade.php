@extends('layouts.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><b>Cari Hesap Detay</b></h4>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          </thead>
          <tbody>

            <tr>
              <td><b> Hesap :</b></td>
              <td> {{$cariHesap->kullanici_ad." ".$cariHesap->kullanici_soyad}} </td>
            </tr>

            <tr>
              <td><b> Telefon :</b></td>
              <td> {{$cariHesap->kullanici_telefon}} </td>
            </tr>

            <tr>
              <td><b> Borçlu Adres :</b></td>
              <td> {{$cariHesap->kullanici_adres}} </td>
            </tr>

            <tr>
              <td><b> Borçlu Kurum :</b></td>
              <td> {{$cariHesap->kullanici_kurum}} </td>
            </tr>

            <!--Toplam Borç-->
            <div style="display:none;">{{$index1=0;}}</div>
            @foreach ($paraTurleri as $paraTuru)
              <tr>
                <td><b> Toplam {{$paraTuru->para_turu}} Borç </b></td>
                <td> {{$toplamBorclar[$index1]}} </td>
              </tr>
              <div style="display:none;">{{$index1+=1;}}</div>
            @endforeach


            <!--Toplam Alacak-->
            <div style="display:none;">{{$index=0;}}</div>
            @foreach ($paraTurleri as $paraTuru)
              <tr>
                <td><b> Toplam {{$paraTuru->para_turu}} Alacak </b></td>
                <td> {{$toplamAlacaklar[$index]}} </td>
              </tr>
              <div style="display:none;">{{$index+=1;}}</div>
            @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
