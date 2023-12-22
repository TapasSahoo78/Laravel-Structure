<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="MHC Doctor Consultation and Medical Service Application" />
    <meta name="description" content="MHC Doctor Consultation and Medical Service Application" />
    <meta name="robots" content="noindex,nofollow" />
    <title>MHC</title>
    <script>
        var _token = '{{ csrf_token() }}'
    </script>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css?v=' . config('custom.CACHE_VERSION')) }}">
    <link href="{{ asset('assets/dist/css/style.min.css?v=' . config('custom.CACHE_VERSION')) }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/dist/css/jquery-confirm.css?v=' . config('custom.CACHE_VERSION')) }}">
    <link href="{{ asset('assets/dist/css/typeahead.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/custom/custom.css?v=' . config('custom.CACHE_VERSION')) }}" rel="stylesheet" />
    @stack('styles')
</head>
