<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('website/logos/smidpng.png') }}">


    @yield('title')
    
     @yield('header')

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/weather-icon/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-iconpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/select2/dist/css/select2.min.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">


    {{-- toaster css --}}

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">

    {{-- data tables --}}
    <link href="//cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- @vite(['resources/js/app.js', 'resources/js/admin.js']) --}}

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            {{-- navbar --}}
            @include('superadmin.layouts.navbar')
            {{-- navbar --}}

            {{-- sidebar --}}
            @include('superadmin.layouts.sidebar')
            {{-- sidebar --}}


            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <span id="current-year"></span>
                    <div class="bullet"></div> Powered By <a
                        href="https://www.linkedin.com/in/mspreddy2021/">Sandeep</a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('backend/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('backend/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    {{-- <script src="{{asset('backend/assets/modules/chart.min.js')}}"></script> --}}
    <script src="{{ asset('backend/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('backend/assets/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    {{-- toaster --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Page Specific JS File -->
    {{-- <script src="{{asset('backend/assets/js/page/index-0.js')}}"></script> --}}

    <!-- Template JS File -->
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

    <!--for data tables reports-->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Popper.js for Bootstrap Dropdowns -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>


    <!--for data tables reports-->

    <script>
        document.getElementById("current-year").textContent = new Date().getFullYear();


        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr().error("{{ $error }}");
            @endforeach
        @endif
    </script>

    @yield('scripts')
</body>

</html>
`
