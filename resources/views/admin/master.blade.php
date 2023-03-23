<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.meta.index')
    <title>@yield('title')</title>
    @include('admin.includes.css.index')
</head>

<body class="fixed-navbar">
<div class="page-wrapper">
    @include('admin.includes.header.index')
    <!-- START SIDEBAR-->
    @include('admin.includes.left-side-nav-bar.index')
    <!-- END SIDEBAR-->
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
            @yield('body')
        </div>
        <!-- END PAGE CONTENT-->
        @include('admin.includes.footer.index')
    </div>
</div>


<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->
@include('admin.includes.js.index')
</body>

</html>
