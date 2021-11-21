<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>

<!-- PAGE LOADING
================================================== -->
<div id="preloader"></div>

<!-- MAIN WRAPPER
================================================== -->
<div class="main-wrapper">

    <!-- HEADER
    ================================================== -->

@include('layouts.nav-menu')

<!-- BANNER
    ================================================== -->

    {!! $slot !!}

    <!-- FOOTER
    ================================================== -->
    @include('layouts.footer_navigation')

</div>

@include('layouts.footer_js')

@livewireScripts
<!-- all js include end -->
</body>

</html>
