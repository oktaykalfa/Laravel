@extends('dashboard.app')

@section('content')
    <!-- Main Wrapper -->
    <div id="main-wrapper">

        <div class="row">
            <div class="alert" style="display:none; text-align:center;" id="post_create_message"></div>

            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title" style="font-size: 20px;">CREATE A POST</h3>
                        <div class="panel-control"></div>
                    </div>
                    <div class="panel-body" style="min-height: 550px;">
                        @if(isset($post_result_message))
                            <div class="alert alert-success text-center" role="alert">
                                {!! $post_result_message !!}
                            </div>
                        @endif

                        @if(isset($post_publish_date_error))

                            <div class="alert alert-danger text-center" role="alert">
                                {!! $post_publish_date_error !!}
                            </div>
                        @endif

                        <form action="/create" method="post" enctype="multipart/form-data">
                            {{@csrf_field()}}
                            <div class="col-md-6">

                                @php
                                    $user_name = Illuminate\Support\Facades\Auth::user()->name;
                                @endphp

                                <div class="form-group">
                                    <label for="posted_by" class="f-bold">Posted by : </label><br>
                                    <input type="text" class="d-inline-block" id="posted_by" style="width: 365px; height: 40px; border:1px solid darkgrey; font-weight: bold; color:darkgrey" value="{{$user_name}}" disabled="disabled">
                                </div>
                                <div class="form-group" style="padding:10px; border:1px dashed darkred;">
                                    <label for="post_media" class="f-bold">Select your image : </label><br>
                                    <input type="file" class="d-inline-block" name="post_media" id="post_media" style="width: 280px" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="post_publish_date" class="f-bold">Post will be published at: </label><br>
                                    <input type="text" class="d-inline-block" name="post_publish_date" style="width: 280px; height: 40px; border:1px solid darkgrey" id="post_publish_date"> <a href="#" style="font-weight: bold" id="publishNowTxt">Publish Now</a>
                                </div>
                                <div class="form-group">
                                    <label for="post_content" class="f-bold">Post Details: </label><br>
                                    <textarea rows="5" cols="46" id="post_content" name="post_content"></textarea>
                                    <div style="text-align: right"><span class="f-bold" id="postContentCharacterCount">250</span> / 250</div>
                                </div>
                                <div style="text-align: right">
                                    <input type="button" class="btn btn-danger" value="Reset">
                                    <input type="submit" class="btn btn-success" value="Create Post">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title" style="font-size: 20px;">POST PREVIEW</h3>
                        <div class="panel-control"></div>
                    </div>
                    <div class="panel-body" style="min-height: 550px;">
                        <div id="postedByPreview"></div>
                        <div id="postPublishDatePreview"></div>
                        <div id="postContentPreview"></div>
                        <div id="imagePreview" style="margin:10px;text-align:center;border:1px solid darkgrey; padding:10px;border-radius:15px;"><img src="" id="oktay"></div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- Main Wrapper -->
@endsection

@section('js')

    <script>
        $(function () {

            //publish preview trigger
            $(document).on("change", "#postPublishDate", function () {
                $("#postPublishDatePreview").html('<span style=""> will be published at </span><span style="font-size:22px; font-weight:bold">' + $("#post_publish_date").val() + '</span>');
            });

            //content preview trigger
            $(document).on("keyup", function () {
                $("#postContentPreview").html('<span style=""> with </span><span style="font-size:17px; font-weight:bold">' + $("#post_content").val() + '</span>');
            });

            //getting now to add publish text
            $("#publishNowTxt").on("click", function (e) {
                e.preventDefault();
                var date_time = new Date();
                var date = new Date();


                //var datetime_now = date.getDate() + "." + (date.getMonth() + 1) + "." + date.getFullYear() + " " + date.getHours() + ":" + date.getMinutes();

                var date1 = (date.getDate() < 9 ? '0' : '') + (date.getDate());
                var date2 = (date.getMonth() < 9 ? '0' : '') + (date.getMonth() + 1);
                var date3 = date.getFullYear();
                var time1 = (date.getHours() < 9 ? '0' : '') + (date.getHours());
                var time2 = (date.getMinutes() < 9 ? '0' : '') + (date.getMinutes());


                var datetime_now = date1 + "." + date2 + "." + date3 + " " + time1 + ":" + time2;


                $("#post_publish_date").val(datetime_now);
                $("#postPublishDatePreview").html('<span style=""> will be published at </span><span style="font-size:22px; font-weight:bold">' + $("#post_publish_date").val() + '</span>');
            });

            //image preview things
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#oktay').attr('src', e.target.result).css({width: "450px", height: '250px'});
            };

            function readURL(input) {
                if (input.files && input.files[0]) {
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#post_media').change(function () {
                readURL(this);
            });
            //image preview things

            //resets the form
            $('input[type="button"]').on("click", function () {
                formReset();
            });

            //upload image and send data without refreshing
            $('form').submit(function (event) {
                event.preventDefault();

                var form = document.querySelector('form'); // Find the <form> element
                var formData = new FormData(form); // Wrap form contents

                var fileInput = document.querySelector('form input[type=file]');

                $.ajax({
                    url: '/create',
                    type: 'POST',
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function (result) {

                        $('#post_create_message').html('').append('<p>' + result + '</p>').slideDown().removeClass('alert-danger').addClass('alert alert-success');
                        formReset();

                    },
                    error: function (result) {
                        $('#post_create_message').html('');
                        var json = $.parseJSON(result.responseText);
                        $.each(json.errors, function (key, value) {
                            $('#post_create_message').append('<p>' + value + '</p>').slideDown().removeClass('alert-success').addClass('alert-danger');
                        });

                    }
                });
                //upload image and send data without refreshing


                //upload the image without refreshing page
                /* $('form').bind("submit", function () {
                     $(this).attr("target", "image_frame");
                     $("#image_frame").bind("load", function () {
                         var result = $("#image_frame").contents().find("body").text();
                         var xjson = JSON.parse(result);
                         var json = JSON.stringify(xjson);
                     });
                 });*/

            });
        });

        function formReset() {
            $("#post_publish_date").val('');
            $("#post_content").val('').focus();
            $("#post_media").val('');
        }


    </script>
@endsection
