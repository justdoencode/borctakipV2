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
        <h4 class="card-title">PARA TÜRLERİ</h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Para Türü Id</th>
                <th>Para Türü</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($paraTurleri as $paraTuru)
                      <tr>
                        <td>{{$paraTuru->para_turu_id}}</td>
                        <td>{{$paraTuru->para_turu}}</td>

                        <td><a onclick="return confirm('Para Türü Silinecek!')" type="submit" class="btn btn-outline-danger" href="{{route('paraTuruSil',['para_turu_id'=>$paraTuru->para_turu_id])}}">Sil</a></td>
                        <td><button type="button" class="btn btn-outline-info" >Daha Fazla</button></td>


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
