@extends('layouts.master')

@push('plugin-styles')

  <link href="{{ asset('/assets/plugins/plugin.css') }}" rel="stylesheet" type="text/css" >
@endpush

@section('content')
<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-cube text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Toplam Borç</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Toplam Borçlu</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">246</h3>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
  <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

@endpush

@push('custom-scripts')
  <script type="text/javascript" src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
