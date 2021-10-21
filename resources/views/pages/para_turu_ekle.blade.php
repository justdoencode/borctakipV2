@extends('layouts.master')

@section('content')
<div class="">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
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
      <h2 class="text-center mb-4">Para Türü Ekle</h2>
      <div class="auto-form-wrapper">

        <form action="{{route('paraTuruEkle')}}" method="post">
          @csrf
          <div class="form-group">
            <div class="input-group">
              <input placeholder="Para Türü" class="form-control" type="text" name="paraTuru">
            </div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Para Türü Ekle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')


@endsection
