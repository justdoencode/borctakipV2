@extends('layouts.master-mini')
@section('content')

<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
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
        <form method="post" action="{{route('login')}}" >
          @csrf
          <div class="form-group">
            <div class="text-block text-center my-3">
              <h5><b>Giriş</b></h5>
            </div>
            <hr>
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
              <input type="password" class="form-control" placeholder="Parola" name="sifre">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary submit-btn btn-block">Giriş</button>
          </div>
          <div class="text-block text-center my-3">
            <a href="{{ route('registerPage') }}" class="text-black text-small">Hesap Ekle</a>
          </div>
        </form>
      </div>
      <ul class="auth-footer">
        <li>
          <a href="https://www.elitbil.com/">Bize Ulaşın</a>
        </li>
      </ul>
      <p class="footer-text text-center">copyright © 2020 Elit Bilişim. All rights reserved.</p>
    </div>
  </div>
</div>

@endsection
