@extends('layouts.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
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
        <h4 class="card-title">Cari Hesaplar</h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>İsim</th>
                <th>Soyisim</th>
                <th>Kurum</th>
                <th>Telefon</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cariHesaplar as $cariHesap)
                      <tr>
                        <td>{{$cariHesap->kullanici_ad}}</td>
                        <td>{{$cariHesap->kullanici_soyad}}</td>
                        <td>{{$cariHesap->kullanici_kurum}}</td>
                        <td>{{$cariHesap->kullanici_telefon}}</td>

                        <td><a type="submit" class="btn btn-outline-danger" href="{{route('cariHesapSil',['cari_hesap_id'=>$cariHesap->cari_hesap_id])}}">Sil</a></td>
                        <td><a type="submit" class="btn btn-outline-info" href="{{route('cariHesapDetayPage',['cari_hesap_id'=>$cariHesap->cari_hesap_id])}}">Daha Fazla</a></td>
                      </tr>
                    @endforeach
            </tbody>

          </table>
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
