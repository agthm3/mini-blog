<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="copyright" content="MACode ID, https://macodeid.com/" />

    <title>Andi Gigatera Halil M.</title>

    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />
    <script src="https://kit.fontawesome.com/795e24dc42.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        @include('components.navbar')

        @yield('header')
    </header>
    <!-- .page-section -->

    @yield('content')
    <!-- .page-section -->

    @include('components.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>

</html>
