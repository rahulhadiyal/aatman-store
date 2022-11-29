<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin | @yield('title')</title>
    
    <!-- BEGIN Style CSS-->
    @include("adminTheme.style")
    <!-- END Style CSS-->

    <!-- BEGIN Custom CSS-->
    @yield('customeStyle')
    <!-- END Custom CSS-->

</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- Fixed-top-->
    
    @include('adminTheme.header')

    <!-- End Fixed-top -->

    <!-- Sidebar -->

    @include('adminTheme.sidebar')

    <!-- End Sidebar -->
    
    <!-- Content -->

    @yield('content')

    <!-- End Content -->

    <!-- Footer -->

    @include('adminTheme.footer')

    <!-- End Footer -->

    <!-- Script -->

    @include('adminTheme.script')
    
    <!-- End Script -->

    <!-- BEGIN Custom Script-->
    @yield('customeScript')
    <!-- END Custom Script-->

</body>
</html>