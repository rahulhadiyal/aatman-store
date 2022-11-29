<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin | @yield('title')</title>
    
    <!-- BEGIN Style CSS-->
    @include("adminTheme.style")
    <!-- END Style CSS-->

    <!-- BEGIN Custom CSS-->
    @yield('customeStyle')
    <!-- END Custom CSS-->

</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- Sidebar -->

    @include('adminTheme.sidebar')

    <!-- End Sidebar -->
    <!-- Fixed-top-->
    
    @include('adminTheme.header')

    <!-- End Fixed-top -->

    
    <!-- Content -->

    @yield('content')

    <!-- End Content -->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

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