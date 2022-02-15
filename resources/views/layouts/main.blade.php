<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
     Laundry
  </title>
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="{{ asset('assets') }}/bootstrap/css/bootstrap.min.css">
  <!-- Favicon -->
  <link href="{{ asset('assets') }}/" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('assets') }}/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="{{ asset('assets') }}/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('assets') }}/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
  @include('partials.sidebar')

  <div class="main-content">
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- Header -->
    <div class="color-swatch-header bg-success pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">

        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">

        @yield('content')

    <!-- Footer -->
    @include('partials.footer')
    </div>
    </div>
  </div>



  {{-- js bootsrap --}}
  <script src="{{ asset('assets') }}/bootsrap/js/bootstrap.bundle.min.js"></script>

  <!-- Jquery -->
  {{-- <script src="{{  asset('assets')  }}/js/plugins/jquery/dist/jquery.min.js"></script> --}}
  <!--end Jquery -->

  <!--   Core   -->
  <script src="{{ asset('assets') }}/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="{{  asset('assets')  }}/js/plugins/jquery/dist/jquery.dataTables.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="{{ asset('assets') }}/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="{{ asset('assets') }}js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="{{ asset('assets') }}js/atributtambahan.js"></script>
  <script>
      window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });

  </script>

 @stack('script')
</body>

</html>
