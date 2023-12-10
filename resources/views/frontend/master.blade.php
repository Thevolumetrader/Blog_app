
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from gmag.kwst.net/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 20:36:47 GMT -->
<head>
        @include('frontend.layout.main-header')
  </head>
    <body>
        <!-- main start  -->
        <div id="main">
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- progress-bar end -->
            <!-- header -->
            <header class="main-header">
                <!-- top bar -->
                @include('frontend.layout.main-navbar')
            </header>
            <!-- header end  -->
            <!-- wrapper -->
              @yield('content')
            <!--register form end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
       @include('frontend.layout.main-script')
    </body>

<!-- Mirrored from gmag.kwst.net/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 20:36:47 GMT -->
</html>
