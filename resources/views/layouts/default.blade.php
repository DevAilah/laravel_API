<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            @include('includes.topbar')
        </div>
        <!-- Top bar End -->

        <!-- Nav Bar Start -->
        <div class="nav">
            @include('includes.navbar')
        </div>
        <!-- Nav Bar End -->

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            @include('includes.bottombar')
        </div>
        <!-- Bottom Bar End -->

        <!-- Main Slider Start -->
        <div class="header">
           @include('includes.header')
        </div>
        <!-- Main Slider End -->

         <!-- Content of different pages-->
         @yield('content')

        <!-- Footer Start -->
        <div class="footer">
            @include('includes.footer')
        </div>
        <!-- Footer End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            @include('includes.footerbottom')
        </div>
        <!-- Footer Bottom End -->

        @include('includes.script')
    </body>
</html>

