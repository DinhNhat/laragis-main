<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.png') }}">

    <title>LaraGigs | Find Jobs & Tech Projects</title>

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('theme/style.css') }}">
</head>

<body class="login-area">

<!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
<div class="main-content- h-100vh">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="hero">
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-5">
                <!-- Middle Box -->
                <div class="middle-box">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Plugins Js -->
<script src="{{ asset('theme/js/jquery.min.js') }}"></script>
<script src="{{ asset('theme/js/popper.min.js') }}"></script>
<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/js/bundle.js') }}"></script>
<script src="{{ asset('theme/js/default-assets/fullscreen.js') }}"></script>

<!-- Active JS -->
{{--<script src="{{ asset('theme/js/canvas.js') }}"></script>--}}
{{--<script src="{{ asset('theme/js/collapse.js') }}"></script>--}}
{{--<script src="{{ asset('theme/js/settings.js') }}"></script>--}}
{{--<script src="{{ asset('theme/js/template.js') }}"></script>--}}
<script src="{{ asset('theme/js/default-assets/active.js') }}"></script>

<!-- Inject JS -->
{{--<script src="{{ asset('theme/js/default-assets/apexchart.min.js') }}"></script>--}}
{{--<script src="{{ asset('theme/js/default-assets/apex-custom.js') }}"></script>--}}
{{--<script src="{{ asset('theme/js/default-assets/dashboard-active.js') }}"></script>--}}

<!-- Inject JS -->
<script src="{{ asset('theme/js/default-assets/jquery.validate.min.js') }}"></script>
<script src="{{ asset('theme/js/default-assets/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('theme/js/default-assets/form-validation-custom.js') }}"></script>
<script src="{{ asset('theme/js/default-assets/bootstrap-maxlength-active.js') }}"></script>


</body>

</html>
