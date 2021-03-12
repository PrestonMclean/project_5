<!doctype html>
<html lang="en">

<!-- START head.blade.php -->
@include('head')
<!-- END head.blade.php -->

<!-- START body -->
<body style="background-color: #4d4d4d !important">

    <!-- START nav.blade.php -->
    @include('nav')
    <!-- END nav.blade.php -->

    <main role="main" class="container"><!-- START main -->
    @yield('body')
    </main><!-- END main -->

    <!-- START footer.blade.php -->
    @include('footer')
<!-- END footer.blade.php -->

</body> <!-- END Body -->
</html>
