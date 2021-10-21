<!DOCTYPE html>
<html>
<head>
  <title>Star Admin Pro Laravel Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  <link href="{{ asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" >
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  <!-- end common css -->

  <!-- select2 css ve js -->
  <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/select2.js')}}"></script>

  <link href="select2.css" rel="stylesheet"/>
  <script src="{{asset('js/select2.js')}}"></script>


  <link href="{{ asset('css/select2.min.css')}}" rel="stylesheet" />

  @yield('css')
  @yield('js')

  <!-- common js -->
  <script type="text/javascript" src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/misc.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/settings.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/todolist.js') }}"></script>




  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    @include('layouts.header')
    <div class="container-fluid page-body-wrapper">
      @include('layouts.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layouts.footer')
      </div>
    </div>
  </div>

  <!-- base js -->
  <script type="text/javascript" src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->



  @stack('custom-scripts')
</body>
</html>


<!-- end common js -->
