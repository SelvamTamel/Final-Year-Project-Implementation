<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('tittle')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/images/head-Icon.ico') }}" rel="icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    

</head>

<body>
    <div id="app">
       
        @include('layouts.inc.user-navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>

