<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2023 17:50:50 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Register | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
    @include('backend.layout.main-header')

</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">

    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">

                        <div class="card-body p-4">

                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="assets/images/logo-dark.png" alt="" height="30">
                                        </a>
                                    </div>
                                    <h5 class="text-uppercase mb-1 mt-4">Register</h5>

                                </div>

                                <div class="account-content mt-4">
                                    <form class="form-horizontal" action="{{route('user.postRegister')}}" method="POST">
                                        @csrf

                                        <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="username">Full Name</label>
                                                    <input class="form-control" name="name" type="text" id="username" required="" placeholder="Michael Zenaty">
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">

                                                <label for="password">Password</label>
                                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                                <div class="col-12">

                                                        <div class="checkbox checkbox-success">
                                                            <input id="remember" type="checkbox" checked="">
                                                            <label for="remember">
                                                                I accept <a href="#">Terms and Conditions</a>
                                                            </label>
                                                        </div>

                                                    </div>
                                        </div>

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign Up Free</button>
                                            </div>
                                        </div>

                                    </form>



                                    <div class="row mt-4 pt-2">
                                        <div class="col-sm-12 text-center">
                                                <p class="text-muted">Already have an account?  <a href="{{route('user.getlogin')}}" class="text-dark ml-1"><b>Sign In</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2023 17:50:50 GMT -->
</html>
