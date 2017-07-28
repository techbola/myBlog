<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/plugins/images/favicon.png')}}">
    <title>Techbola - Admin</title>
    <!-- Bootstrap Core CSS -->
    {!! Html::style('admin/bootstrap/dist/css/bootstrap.min.css') !!}

    {!! Html::style('admin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') !!}

    <!-- Menu CSS -->
    {!! Html::style('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') !!}

    <!-- toast CSS -->
    {!! Html::style('admin/plugins/bower_components/toast-master/css/jquery.toast.css') !!}

    <!-- morris CSS -->
    {!! Html::style('admin/plugins/bower_components/morrisjs/morris.css') !!}

    <!-- animation CSS -->
    {!! Html::style('admin/css/animate.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('admin/css/style.css') !!}


    {!! Html::style('admin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css') !!}

    {!! Html::style('admin/plugins/bower_components/dropify/dist/css/dropify.min.css') !!}

    <!-- color CSS -->
    {!! Html::style('admin/css/colors/blue.css') !!}

    <!-- mystyle CSS -->
    {!! Html::style('admin/css/mystyle.css') !!}


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
<div id="wrapper">

    @if (Auth::guard('admin')->check())
      @include('admin.partials.header')
      @include('admin.partials.sidebar')
    @endif

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- .row -->
            @if (Auth::guard('admin')->check())
                @yield('content')
            @endif
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

        <footer class="footer text-center"> 2017 &copy; techBola </footer>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
{!! Html::script('admin/plugins/bower_components/jquery/dist/jquery.min.js') !!}

<!-- Bootstrap Core JavaScript -->
{!! Html::script('admin/bootstrap/dist/js/tether.min.js') !!}
{!! Html::script('admin/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('admin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') !!}

<!-- Menu Plugin JavaScript -->
{!! Html::script('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') !!}

<!--slimscroll JavaScript -->
{!! Html::script('admin/js/jquery.slimscroll.js') !!}

<!--Wave Effects -->
{!! Html::script('admin/js/waves.js') !!}

<!--Counter js -->
{!! Html::script('admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js') !!}
{!! Html::script('admin/plugins/bower_components/counterup/jquery.counterup.min.js') !!}

<!--Morris JavaScript -->
{!! Html::script('admin/plugins/bower_components/raphael/raphael-min.js') !!}
{!! Html::script('admin/plugins/bower_components/morrisjs/morris.js') !!}

<!-- Custom Theme JavaScript -->
{!! Html::script('admin/js/custom.min.js') !!}
{!! Html::script('admin/js/dashboard1.js') !!}
<!-- Sparkline chart JavaScript -->
{!! Html::script('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') !!}
{!! Html::script('admin/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') !!}
{!! Html::script('admin/plugins/bower_components/toast-master/js/jquery.toast.js') !!}

<!-- wysuhtml5 Plugin JavaScript -->
{!! Html::script('admin/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js') !!}
{!! Html::script('admin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js') !!}

<script>
    $(document).ready(function() {
        $('.textarea_editor').wysihtml5();
    });
</script>
<!--Style Switcher -->
{!! Html::script('admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') !!}

</body>

</html>
