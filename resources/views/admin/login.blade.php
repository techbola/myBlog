<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/plugins/images/favicon.png') }}">
    <title>Admin Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="{{route('admin.login.submit')}}"  method="POST">
                {{ csrf_field() }}

                <h3 class="box-title m-b-20">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" name="email" required="" placeholder="Email Address" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <p>{{$errors->first('email')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        @if($errors->has('password'))
                            <p>{{$errors->first('password')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="{{ asset('admin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('admin/bootstrap/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('admin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<!--Style Switcher -->
<script src="{{ asset('admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

</html>
