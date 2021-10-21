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
        <h4 class="card-title">ALACAKLAR</h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Alacaklı</th>
                <th>Alacak Başlangıç Tarihi</th>
                <th>Alacak Bitiş Tarihi</th>
                <th>Alacak Miktarı</th>
                <th>Para Türü</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($alacaklar as $alacak)
                      <tr>
                        <td>{{$alacak->getCariHesap->kullanici_ad." ".$alacak->getCariHesap->kullanici_soyad}}</td>
                        <td>{{$alacak->alacak_baslangic_tarihi}}</td>
                        <td>{{$alacak->alacak_bitis_tarihi}}</td>
                        <td>{{$alacak->alacak_miktari}}</td>
                        <td>{{$alacak->getParaTuru->para_turu}}</td>

                        <td><a type="submit" class="btn btn-outline-danger" href="{{route('alacakSil',['alacak_id'=>$alacak->alacak_id])}}">Sil</a></td>
                        <td><a type="submit" class="btn btn-outline-info" href="{{route('alacakDetayPage',['alacak_id'=>$alacak->alacak_id])}}">Daha Fazla</a></td>


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
