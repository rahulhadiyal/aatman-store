<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Aatman Store | @yield('title')</title>

    @include('storeTheme.style')

    @yield('customeStyle')

</head>

<body>

<!-- Start Main Top -->

@include('storeTheme.header')

<!-- End Main Top -->

<!-- Content -->

@yield('content')

<!-- End Content -->

<!-- Start Footer  -->

@include('storeTheme.footer')

<!-- End Footer  -->

<!-- Script -->

@include('adminTheme.script')

<!-- End Script -->

<!-- BEGIN Custom Script-->
@yield('customeScript')
<!-- END Custom Script-->

</body>
</html>