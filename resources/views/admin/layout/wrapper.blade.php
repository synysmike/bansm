<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $tittle }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/admin_theme/library/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="/admin_theme/library/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/admin_theme/library/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Libraries -->
    @include($css)
    <!-- Template CSS -->
    <link rel="stylesheet" href="/admin_theme/css/style.css">
    <link rel="stylesheet" href="/admin_theme/css/components.css">

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- END GA -->
</head>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('admin.layout.nav')
            @include('admin.layout.side')
            <!-- Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>{{ $tittle }}</h1>
                    </div>
                    <div class="section-body">
                        @yield('admin-container')
                    </div>
                </section>
            </div>

            <!-- Footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="/admin_theme/library/jquery/dist/jquery.min.js"></script>
    <script src="/admin_theme/library/popper.js/dist/umd/popper.js"></script>
    <script src="/admin_theme/library/tooltip.js/dist/umd/tooltip.js"></script>
    <script src="/admin_theme/library/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/admin_theme/library/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="/admin_theme/library/moment/min/moment.min.js"></script>
    <script src="/admin_theme/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/admin_theme/library/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/admin_theme/library/summernote/dist/summernote-bs4.js"></script>
    <!-- Page Specific JS File -->
    @include($js)
    <!-- Template JS File -->
    <script src="/admin_theme/js/scripts.js"></script>
    {{-- <script src="/admin_theme/js/custom.js"></script> --}}
</body>

</html>
