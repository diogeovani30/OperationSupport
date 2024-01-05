<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="icon" type="image/png" href="img/icons/favicon.ico" /> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css"> --}}
    {{-- <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> --}}
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Todolist --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--===============================================================================================-->
    <style>
        body {
            background-color: grey;
            /* background-image: url("https://s0.smartresize.com/wallpaper/930/438/HD-wallpaper-white-puzzles-background-macro-puzzles-white-backgrounds-puzzles-backgrounds-puzzle-texture-creative-art-3d-puzzles-texture.jpg"); */
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-login100 -mt-4" style="background-image: url('img/company-profile.jpg');">
        <div class="wrap-login100">
            <form action="/login" method="post" class="login100-form validate-form">
                <span class="login100-form-logo">
                    <i class="ic ic-twotone-support-agent"> <iconify-icon
                            icon="mdi:account"></iconify-icon></iconify-icon></i>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>



                @csrf
                <div class="wrap-input100 validate-input" class="form-floating">
                    <input class="input100" type="email" name="email"
                        class="form-control @error('email') is-invalid  @enderror" placeholder="Email" autofocus
                        required value="{{ old('email') }}">
                    <span class="focus-input100"></span>

                    @error('email')
                        <div class="invalid-feddback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password" required>
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">Login </button>
                </div>
            </form>
            <small class="d-block text-center mt-3" style="color:#ffffff;">Not Registered ? <a href="/register">Register
                    Now</a></small>
            </main>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
    <script src=:https://code.jquery.com/jquery-3.6.0.min.js></script>

</body>

</html>
{{-- @endsection --}}
