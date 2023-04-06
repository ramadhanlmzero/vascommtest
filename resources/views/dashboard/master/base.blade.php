<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <title>PT. Vascomm Solusi Teknologi</title>
	    <meta name="description" content="PT. Vascomm Solusi Teknologi">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="shortcut icon" href="https://vascomm.co.id/package/img/favicon.png">
        
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/plugin.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css" />
        @yield('css')
    </head>
    <body class="layout-light side-menu">        
        @include('dashboard.master.components.header')

        <main class="main-content">
            @include('dashboard.master.components.sidebar')

            <div class="contents">
                <div class="demo5 mt-30 mb-25">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            
            @include('dashboard.master.components.footer')
        </main>

        <div id="overlayer">
            <div class="loader-overlay">
                <div class="dm-spin-dots spin-lg">
                    <span class="spin-dot badge-dot dot-primary"></span>
                    <span class="spin-dot badge-dot dot-primary"></span>
                    <span class="spin-dot badge-dot dot-primary"></span>
                    <span class="spin-dot badge-dot dot-primary"></span>
                </div>
            </div>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

        <script src="{{ asset('assets/dashboard/js/plugins.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/script.min.js') }}"></script>
        @include('sweetalert::alert')
        @yield('js')
    </body>
</html>
