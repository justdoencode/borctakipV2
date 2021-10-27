@extends('layouts.master-mini')

@section('content')
<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/register.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">

      <div class="auto-form-wrapper">
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
        <form action="{{route('register')}}" method="post">
          @csrf
          <div class="text-block text-center my-3">
            <h5><b>Kayıt</b></h5>
          </div>
          <hr>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="İsim" name="isim">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Soyisim" name="soyisim">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email" name="email">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Parola" name="parola">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary submit-btn btn-block">Kaydol</button>
          </div>
          <div class="text-block text-center my-3">
            <a href="{{ route('loginPage') }}" class="text-black text-small">Giriş</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
