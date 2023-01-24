<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login &mdash; BAN-S/M JATIM</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/admin_theme/library/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/admin_theme/library/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/admin_theme/css/style.css">
    <link rel="stylesheet" href="/admin_theme/css/components.css">
</head>
1

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex align-items-stretch flex-wrap">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="m-3 p-4">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissable fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissable fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <img src="/ban.png" alt="logo" width="80"
                            class="shadow-light rounded-circle mb-5 mt-2">
                        <h4 class="text-dark font-weight-normal">Selamat Datang Di <span class="font-weight-bold">BAN-S/M Provinsi Jawa Timur</span>
                        </h4>
                        <p class="text-muted"></p>
                        <form method="post" action="/login" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="invalid-feedback">
                                    Please fill in your email
                                </div>
                                <input id="username" type="email" class="form-control" name="username" tabindex="1"
                                value="{{ old('username') }}"    required autofocus>
                                
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password"
                                    tabindex="2" required>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                        id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                </div>
                            </div> --}}

                            <div class="form-group text-right">
                                {{-- <a href="auth-forgot-password.html" class="float-left mt-3">
                                    Forgot Password?
                                </a> --}}
                                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right"
                                    tabindex="4">
                                    Login
                                </button>
                            </div>

                            
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 min-vh-100 background-walk-y position-relative overlay-gradient-bottom order-1"
                    data-background="/admin_theme/img/unsplash/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="display-4 font-weight-bold mb-2">Good Morning</h1>
                                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank"
                                href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a
                                class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    {{-- <script src="/admin_theme/js/scripts.js"></script> --}}
    {{-- <script src="/admin_theme/js/custom.js"></script> --}}
    <script>
    $("[data-background]").each(function() {
        var me = $(this);
        me.css({
          backgroundImage: 'url(' + me.data('background') + ')'
        });
      });</script>
</body>

</html>
