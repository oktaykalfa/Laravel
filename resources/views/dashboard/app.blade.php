<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Laravel - Demo</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template"/>
    <meta name="keywords" content="admin,dashboard"/>
    <meta name="author" content="stacks"/>

    <!-- Styles -->
    <link href="/dashboard/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="/dashboard/assets/plugins/uniform/css/default.css" rel="stylesheet"/>
    <link href="/dashboard/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/datetimepicker-master/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
@yield('css')

<!-- Theme Styles -->
    <link href="/dashboard/assets/css/meteor.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <script src="/dashboard/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<body class="compact-menu">
<div class="overlay"></div>

<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                    <i class="icon-arrow-right"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="index.php" class="logo-text"><span>Laravel</span></a>
            </div><!-- Logo Box -->

            <div class="topmenu-outer">
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
                        </li>
                    </ul>

                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->
    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <ul class="menu accordion-menu">
                <li>
                    <a href="/" class="waves-effect waves-button"><span class="menu-icon icon-home"></span>
                        <p>Posts</p>
                    </a>
                </li>
                <li>
                    <a href="/create" class="waves-effect waves-button"><span class="menu-icon icon-home"></span>
                        <p>Create</p>
                    </a>
                <li/>
                <li>
                    <a href="/logout" class="waves-effect waves-button"><span class="menu-icon icon-home"></span>
                        <p>Log out</p>
                    </a>
                <li/>
            </ul>
        </div>
        <!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->
    <div class="page-inner">


        @yield('content')


        <div class="page-footer">
            <p class="text-center m-t-xs text-sm">O.K</p>
        </div>
    </div><!-- Page Inner -->
</main><!-- Page Content -->

<div class="cd-overlay"></div>


<!-- Javascripts -->
<script src="/dashboard/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="/dashboard/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/dashboard/assets/plugins/pace-master/pace.min.js"></script>
<script src="/dashboard/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="/dashboard/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/dashboard/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/dashboard/assets/plugins/switchery/switchery.min.js"></script>
<script src="/dashboard/assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
<script src="/dashboard/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="/dashboard/assets/plugins/waves/waves.min.js"></script>
<script src="/dashboard/assets/plugins/3d-bold-navigation/js/main.js"></script>
<script src="/dashboard/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="/dashboard/assets/plugins/datetimepicker-master/jquery.datetimepicker.js"></script>


<!--<script src="/dashboard/assets/plugins/toastr/toastr.min.js"></script>-->
<script src="/dashboard/assets/plugins/flot/jquery.flot.min.js"></script>
<script src="/dashboard/assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="/dashboard/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="/dashboard/assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="/dashboard/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/dashboard/assets/plugins/curvedlines/curvedLines.js"></script>
<script src="/dashboard/assets/plugins/chartjs/Chart.bundle.mn.js"></script>
<script src="/dashboard/assets/js/meteor.min.js"></script>
<script src="/dashboard/assets/js/pages/dashboard.js"></script>


<script>
    $(function () {


        $('#post_publish_date, #post_public_date_update, #publish_start_date, #publish_end_date').datetimepicker({
            format: 'd.m.Y H:i',
            todayButton: false,
        });


        $(document).on("keyup", "#postContent", function () {
            var currentNumber = $("#postContent").val().length;
            var totalNumber = 250;
            $("#postContentCharacterCount").text(totalNumber - currentNumber);

        });


    });

</script>
@yield('js')

</body>
</html>