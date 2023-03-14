<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title> Login | RIS MRP - Admin </title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}">

</head>

<body class="layout-3">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">


                        <div class="card card-primary">
                            <div class="login-brand text-left mx-4 mt-4 mb-0">
                                <img src="{{ asset('img/logo/logo-2.webp') }}" alt="logo" width="150">
                            </div>
                            <div class="card-header m-0 justify-content-center">
                                <h4 class="text-dark text-center"><i>RIS MRP (Manufacturing Resource Planning) -
                                        Admin</i></h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login-admin') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    @if (session('status'))
                                        <div class="alert alert-danger alert-dismissible text-center" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input id="username" type="text" class="form-control" name="username"
                                            tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your username
                                        </div>
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

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                            <div class="card-footer bg-light">
                                Copyright &copy; PT. Romindo Primavetcom 2023
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('libs/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/popper.js') }}"></script>
    <script src="{{ asset('libs/tooltip.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('libs/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.min.js') }}"></script>
    <script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
    <script>
        $.backstretch("img/logo/login-bg2.webp", {
            speed: 500
        });
    </script>

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.min.js') }}"></script>
</body>

</html>
