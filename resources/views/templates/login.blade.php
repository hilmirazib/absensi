
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}" />
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/icons-alipay.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap.css') }}">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    {{-- select picker --}}
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap-select.min.css') }}">

    {{-- timepicker --}}
    <link rel="stylesheet" href="{{ asset('assets/styles/flatpickr.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/styles.css') }}" />
    <link rel="manifest" href="{{ asset('assets/_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
    @stack('style')
</head>

<body>
     <!-- preloade -->
     <div class="preload preload-container">
        <div class="preload-logo">
          <div class="spinner"></div>
        </div>
      </div>
    <!-- /preload -->
    <div class="mt-7 login-section">
        <div class="tf-container">
            @yield('container')
        </div>
    </div>

    <script type="text/javascript" src="{{  asset('assets/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('assets/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('assets/javascript/password-addon.js') }}"></script>
    <script type="text/javascript" src="{{  asset('assets/javascript/main.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    {{-- selectpicker --}}
    <script src="{{ asset('assets/javascript/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/flatpickr.js') }}"></script>

    <script>
        $(function(){
          $('form').on('submit', function(){
            $(':input[type="submit"]').prop('disabled', true);
          })
        })
    </script>
    @stack('script')
</body>

</html>
