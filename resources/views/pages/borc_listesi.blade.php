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
        <h4 class="card-title">BORÇLAR</h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Borçlu</th>
                <th>Borç Başlangıç Tarihi</th>
                <th>Borç Bitiş Tarihi</th>
                <th>Borç Miktarı</th>
                <th>Para Türü</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($borclar as $borc)
                      <tr>
                        <td>{{$borc->getCariHesap->kullanici_ad." ".$borc->getCariHesap->kullanici_soyad}}</td>
                        <td>{{$borc->borc_baslangic_tarihi}}</td>
                        <td>{{$borc->borc_bitis_tarihi}}</td>
                        <td>{{$borc->borc_miktari}}</td>
                        <td>{{$borc->getParaTuru->para_turu}}</td>

                        <td><a onclick="return confirm('Borç Silinecek!')" type="submit" class="btn btn-outline-danger" href="{{route('borcSil',['borc_id'=>$borc->borc_id])}}">Sil</a></td>
                        <td><a type="submit" class="btn btn-outline-info" href="{{route('borcDetayPage',['borc_id'=>$borc->borc_id])}}">Daha Fazla</a></td>


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
