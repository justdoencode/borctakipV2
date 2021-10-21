@extends('layouts.master')

@section('content')
<div class="">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <h2 class="text-center mb-4">Register</h2>
      <div class="auto-form-wrapper">
        <form action="#">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Username">
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Confirm Password">
              <div class="input-group-append">
              </div>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
