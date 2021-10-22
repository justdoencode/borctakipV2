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


<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><b>Alacaklar</b></h4>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Alacak Başlama Tarihi</th>
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



  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><b>Borçlar</b></h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Borç Başlama Tarihi</th>
                <th>Borç Bitiş Tarihi</th>
                <th>Borç Miktarı</th>
                <th>Borç Türü</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($borclar as $borc)
                  <tr>
                    <td>{{$borc->borc_baslangic_tarihi}}</td>
                    <td>{{$borc->borc_bitis_tarihi}}</td>
                    <td>{{$borc->borc_miktari}}</td>
                    <td>{{$borc->getParaTuru->para_turu}}</td>

                    <td><a type="submit" class="btn btn-outline-danger" href="{{route('borcSil',['borc_id'=>$borc->borc_id])}}">Sil</a></td>
                    <td><a type="submit" class="btn btn-outline-info" href="{{route('borcDetayPage',['borc_id'=>$borc->borc_id])}}">Daha Fazla</a></td>

                  </tr>
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
