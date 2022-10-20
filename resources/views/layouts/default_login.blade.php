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
        </div><br><br><br>
        <!-- Nav Bar End -->


        <!-- Content of different pages-->
         @yield('content')



        @include('includes.script')
    </body>
</html>

