
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('public') }}/vendor/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('public') }}/vendor/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                                    </div>
                                 
                                        @include('admin.utils.notif')
                                    <form action="{{url('login')}}" method="post">
                                        @csrf
                                        <div class="form-group">

                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">

                                        </div>

                                        <div class="form-group">

                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">

                                        </div>
                                        <div class="forgot">
                                            <a href="reset.html">Forgot password?</a>
                                        </div>
                                        <button href="{{url('admin/beranda')}}" type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                         Login
                                        </button>
                                    
                                        <div class="text-center">
                                        <a class="small" href="{{ url('forgot') }}">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                        <a class="small" href="{{ url('register') }}">Create an Account!</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('public') }}/vendor/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('public') }}/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('public') }}/vendor/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('public') }}/vendor/js/sb-admin-2.min.js"></script>

</body>

</html>