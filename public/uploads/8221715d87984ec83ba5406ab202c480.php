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
    <link href="/dashboard/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="/dashboard/plugins/uniform/css/default.css" rel="stylesheet"/>
    <link href="/dashboard/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/plugins/datetimepicker-master/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
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
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
    <h3><span class="pull-left">Messages</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="icon-close"></i></a></h3>
    <div class="slimscroll">
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
    </div>
</nav>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
    <h3><span class="pull-left">Michael Lewis</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
    <div class="slimscroll chat">
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Duis aute irure dolor?
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Lorem ipsum dolor sit amet, dapibus quis, laoreet et.
            </div>
        </div>
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Ut ullamcorper, ligula.
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                In hac habitasse platea dict umst. ligula eu tempor eu id tincidunt.
            </div>
        </div>
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Curabitur pretium?
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Etiam tempor. Ut tempor! ull amcorper.
            </div>
        </div>
    </div>
    <div class="chat-write">
        <form class="form-horizontal" action="javascript:void(0);">
            <input type="text" class="form-control" placeholder="Say something">
        </form>
    </div>
</nav>
<form class="search-form" action="#" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
        <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
    </div><!-- Input Group -->
</form><!-- Search Form -->
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
            <div class="search-button">
                <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
            </div>
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
</main><!-- Page Content -->/dashboard/

<div class="cd-overlay"></div>


<!-- Javascripts -->
<script src="/dashboard/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="/dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
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
<script src="/dashboard/plugins/datetimepicker-master/jquery.datetimepicker.js"></script>


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


        $('#postPublishDate').datetimepicker({
            format: 'd.m.Y H:i',
            todayButton: false,
        });

        $(document).ready(function () {

            file_style();

            /*$('form').bind("submit", function (e) {
                e.preventDefault();
            });*/

            $(".contact input").keyup(function () {
                var value = $(this).val();
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                if ($(this).parent().hasClass("email")) {
                    if (!reg.test($(this).val())) {
                        validate_animation($(this), "error");
                        error_message($(this), "error");
                    } else {
                        validate_animation($(this), "success");
                        error_message($(this), "success");
                    }
                    exit;
                }
                if (value.length > 0) {
                    validate_animation($(this), "success");
                    error_message($(this), "success");
                } else if (value.length == 0) {
                    validate_animation($(this), "blank");
                    error_message($(this), "blank");
                } else {
                    validate_animation($(this), "error");
                    error_message($(this), "error");
                }
            });

            $(".contact input").blur(function () {
                error_message($(this), "blank");
            });

        });

        function validate_animation(elem, is_valid) {

            if (is_valid != "blank") {
                var elem_class = elem.attr("class").split("-");
                elem.attr("class", elem_class[0] + "-to-" + is_valid);
            } else {
                elem.attr("class", "default");
            }

        }

        function error_message(elem, is_valid) {
            if (is_valid == "error") {
                var msg = elem.attr("msg");
                elem.next().text(msg).show();
            } else {
                elem.next().hide();
            }
        }

        function file_style() {

            var wrapper = $('<div/>').css({height: 0, width: 0, 'overflow': 'hidden'});
            var fileInput = $(':file').wrap(wrapper);

            fileInput.change(function () {
                $this = $(this);
            });

            $('#file').click(function () {
                fileInput.click();
            }).show();
        }


        (function () {
            var input = document.getElementById("images"),
                form = document.getElementById("image-form"),
                dropbox = document.getElementById("file"),
                formdata = false;

            function showUploadedItem(source) {
                $("#image-list").html("<img src='" + source + "' width='100' height='100'/>");
                $("#imagePreview").html("<img src='" + source + "' width='300' height='400'/>");

            }

            function dragEnter(evt) {
                evt.stopPropagation();
                evt.preventDefault();
            }

            function dragOver(evt) {
                evt.stopPropagation();
                evt.preventDefault();
                $('#file').css("background-position", "center -140px");
                $('#file p').text("Release to add image").css("cursor", "alias");
            }

            function dragExit(evt) {
                evt.stopPropagation();
                evt.preventDefault();
                $('#file').css("background-position", "center 35px");
                $('#file p').text("Click or Drag in an image to upload").css("cursor", "pointer");
            }

            function handleFiles(files) {
                var file = files[0];
                if (!!file.type.match(/image.*/)) {
                    if (window.FileReader) {
                        reader = new FileReader();
                        reader.onloadend = function (e) {
                            showUploadedItem(e.target.result, file.fileName);
                        };
                        reader.readAsDataURL(file);
                    }
                }
            }

            function drop(evt) {
                evt.stopPropagation();
                evt.preventDefault();

                var files = evt.dataTransfer.files;
                var count = files.length;
                // Only call the handler if 1 or more files was dropped.
                if (count > 0) {
                    handleFiles(files);
                }
            }

            if (window.FormData) {
                formdata = new FormData();
            }

            // init event handlers
            dropbox.addEventListener("dragenter", dragEnter, false);
            dropbox.addEventListener("dragexit", dragExit, false);
            dropbox.addEventListener("dragover", dragOver, false);
            dropbox.addEventListener("drop", drop, false);


            input.addEventListener("change", function (evt) {
                //document.getElementById("response").innerHTML = "Uploading . . ."
                var i = 0, len = this.files.length, img, reader, file;

                for (; i < len; i++) {
                    file = this.files[i];

                    if (!!file.type.match(/image.*/)) {
                        if (window.FileReader) {
                            reader = new FileReader();
                            reader.onloadend = function (e) {
                                showUploadedItem(e.target.result, file.fileName);
                            };
                            reader.readAsDataURL(file);
                        }
                        if (formdata) {
                            formdata.append("images[]", file);
                        }
                    }
                }
            }, false);

        }());


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