@php

    use App\Helpers\Helper as Helper;

@endphp


@extends('dashboard.app')

@section('content')

    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h2 class="panel-title">POST QUERY</h2>
                        <div class="panel-control"></div>
                    </div>
                    <div class="panel-body">
                        <form action="/query" method="post" enctype="multipart/form-data" id="form_query">
                            {{csrf_field()}}
                            <div class="form-group">
                                <span style="font-weight: bold;"> Publish  Start Date : </span>
                                <input type="text" class="d-inline-block" id="publish_start_date" name="publish_start_date" value="<?=date("01.m.Y 00:00")?>" style="width: 150px; height: 40px; border:1px solid darkgrey; font-weight: bold;">

                                <span style="font-weight: bold;"> Publish End Date : </span>
                                <input type="text" class="d-inline-block" id="publish_end_date" name="publish_end_date" value="<?=date("d.m.Y 23:59")?>" style="width: 150px; height: 40px; border:1px solid darkgrey; font-weight: bold;">

                                <input type="submit" value="Search" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title"></h3>
                        <div class="panel-control"></div>
                    </div>
                    <div class="panel-body">

                        @if(@   count($posts) > 0)

                            <table class="table-bordered table" style="border-collapse: separate;" id="oktay">
                                <thead>
                                <tr>
                                    <th style="text-align: center">ID</th>
                                    <th style="text-align: center">POSTED BY</th>
                                    <th style="text-align: center">CREATED DATE</th>
                                    <th style="text-align: center">PUBLISH DATE</th>
                                    <th style="text-align: center">CONTENT</th>
                                    <th style="text-align: center">MEDIA</th>
                                    <th style="text-align: center">ACTION</th>
                                </tr>
                                </thead>
                                <tbody id="table_body">


                                @foreach($posts as $post)
                                    @php
                                        @$published = $post->post_publish_date < date("Y-m-d H:i:s") ? "Publish Now" : "Already Published";
                                        $background_color = ($published == 'Publish Now' ? "#f7f7f7":"#b1ff84");
                                    @endphp
                                    <tr style="background-color:{{$background_color}}" id="deleteID-{{$post->id}}">
                                        <th scope="row" style="vertical-align: middle; text-align: center">{{$post->id}}</th>
                                        <td style="text-align:center;vertical-align: middle;font-weight: bold;">{{$post->user->name}}</td>
                                        <td style="text-align: center;vertical-align: middle;">{{App\Helpers\Helper::dateToTurkish($post->created_at)}}</td>
                                        <td style="text-align: center;vertical-align: middle;">{{App\Helpers\Helper::dateToTurkish($post->post_publish_date)}}</td>
                                        <td style="text-align: center;vertical-align: middle;">{{$post->post_content}}</td>
                                        <td style="text-align: center;vertical-align: middle;">

                                            @if(isset($post->post_media))
                                                <img alt="" class="table_img" width="50" height="50" data-toggle="modal" data-target="#modal_image_preview" src="/uploads/{{$post->post_media}}"/>
                                            @else
                                                <img alt="" class="table_img" width="50" height="50" src="/dashboard/assets/images/no-photo.png">
                                            @endif

                                        </td>
                                        <td style="text-align: center">
                                            <div class="btn-group m-b-sm">
                                                <button type="button" class="btn btn-danger">Action</button>
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_post_edit" class="postEdit" data="{{$post->id}}">Edit</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#" style="color:#fa1b59" class="postDelete" data="{{$post->id}}">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger" role="alert">No record found. Want to create one? <a href="/create">Click here</a></div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="modal fade bs-example-modal-lg" id="modal_image_preview" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" style="text-align: center;" id="modal_body">
                                <img src="" alt id="modal_body_img" width="600" height="400">
                            </div>
                            <div class="modal-footer" style="padding:10px;">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal_post_edit" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" style="text-align: center; overflow-x: scroll; overflow-y:scroll; max-height: 600px;" id="modal_body_for_update">
                                <div class="alert alert-danger" id="post_modal_update_alert" style="display: none;"></div>
                                <div class="col-md-6 text-left">
                                    <div class="form-group">
                                        <label for="post_id_update" class="f-bold">ID</label><br>
                                        <input type="text" class="d-inline-block" id="post_id_update" style="width: 280px; height: 40px; border:1px solid darkgrey; font-weight: bold; color:darkgrey" disabled="disabled">
                                    </div>
                                    <div class="form-group">
                                        <label for="post_public_date_update" class="f-bold">Created date : </label><br>
                                        <input type="text" class="d-inline-block" id="post_created_date_update" style="width: 280px; height: 40px; border:1px solid darkgrey; font-weight: bold; color:darkgrey" disabled="disabled">
                                    </div>
                                    <div class="form-group">
                                        <label for="post_public_date_update" class="f-bold">Post will be published at: </label><br>
                                        <input type="text" class="d-inline-block" name="" style="width: 280px; height: 40px; border:1px solid darkgrey" id="post_public_date_update" required> <a href="#" style="font-weight: bold" id="publishNowTxt">Publish Now</a>
                                    </div>
                                    <div class="form-group">
                                        <label for="post_content_update" class="f-bold">Post Details: </label><br>
                                        <textarea rows="5" cols="47" id="post_content_update"></textarea>
                                        <div style="text-align: right"><span class="f-bold" id="postContentCharacterCount">250</span> / 250</div>
                                    </div>
                                    <div style="text-align: right">
                                        <button type="button" class="btn btn-success" id="post_update_btn">Update Post</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><img id="img_post_modal_update" width="400" height="225"></div>
                                </div>
                            </div>
                        </div>
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
            $(document).on("click", '.postDelete', function (e) {
                e.preventDefault();
                var id = $(this).attr("data");

                var response = confirm("This post will be deleted. Are you sure?");
                if (response) {
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/",
                        data: "data=" + id + "&_token={{csrf_token()}}",
                        success: function (result) {
                            if (result.status == "Success") {

                                $("#deleteID-" + id).toggle('hide');
                            }

                        }
                    });
                }
            });


            //image preview
            $(document).on("click", ".table_img", function () {
                var img_url = $(this).attr("src");
                $('#modal_body_img').attr("src", img_url);
                $('#img_modal').show();
            });

            //post edit

            $(document).on("click", ".postEdit", function () {

                var post_id = $(this).attr('data');
                var post_row = $("#deleteID-" + post_id);

                var post_created_date = post_row.find("td").eq(1).text();
                var post_publish_date = post_row.find("td").eq(2).text();
                var post_content = post_row.find("td").eq(3).text();
                var post_image_url = post_row.find("td").eq(4).find('img').attr('src');

                $("#post_id_update").val(post_id);
                $('#post_created_date_update').val(post_created_date);
                $('#post_public_date_update').val(post_publish_date);
                $('#post_content_update').text(post_content);
                $('#img_post_modal_update').attr('src', post_image_url);


            });

            $(document).on('click', '#post_update_btn', function () {


                var post_id = $('#post_id_update').val().trim();
                var post_public_date_update = $('#post_public_date_update').val().trim();
                var post_content_update = $('#post_content_update').val().trim();

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/update",
                    data: "id=" + post_id + "&post_publish_date=" + post_public_date_update + "&post_content=" + post_content_update + "&_token={{csrf_token()}}",
                    success: function (result) {
                        if (result.status === "Success") {
                            alert("Your post has been updated.");
                            location.href = '/';
                        }

                    },
                    error: function (result) {
                        $("#post_modal_update_alert").show().html('');
                        var json = $.parseJSON(result.responseText);
                        $.each(json.errors, function (key, value) {
                            $("#post_modal_update_alert").append('<p>' + value + '</p>');

                        });
                    }

                });
            });


            $("#publishNowTxt").on("click", function () {

                var date = new Date();

                var date1 = (date.getDate() < 9 ? '0' : '') + (date.getDate());
                var date2 = (date.getMonth() < 9 ? '0' : '') + (date.getMonth() + 1);
                var date3 = date.getFullYear();
                var time1 = (date.getHours() < 9 ? '0' : '') + (date.getHours());
                var time2 = (date.getMinutes() < 9 ? '0' : '') + (date.getMinutes());


                var datetime_now = date1 + "." + date2 + "." + date3 + " " + time1 + ":" + time2;

                $("#post_public_date_update").val(datetime_now);

            });

            //form_query
            $('#form_query').submit(function (event) {
                event.preventDefault();
                var publish_start_date = $("#publish_start_date").val();
                var publish_end_date = $("#publish_end_date").val();

                if (publish_start_date <= publish_end_date) {
                    $("#oktay tbody tr").each(function () {
                        var row_data = $(this).find("td").eq(2).text();

                        if (row_data >= publish_start_date && row_data <= publish_end_date) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                } else if (publish_start_date > publish_end_date) {
                    alert("Start date cannot be greater than end date.");
                } else {
                    alert("Check your date values.");
                }


                /*var form = document.querySelector('form');
                var formData = new FormData(form);

                /*$.ajax({
                    url: '/query',
                    type: 'POST',
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        $("#table_body").html('');
                        $.each(result, function (key, value) {
                            $("#table_body").append('<tr id="deletedID-' + value.id + '">' +
                                '<td style="text-align: center; vertical-align: middle;">' + value.id + '</td>' +
                                '<td style="text-align: center; vertical-align: middle;">' + value.name + '</td>' +
                                '<td style="text-align: center; vertical-align: middle;">' + value.created_at + '</td>' +
                                '<td style="text-align: center; vertical-align: middle;">' + value.post_publish_date + '</td>' +
                                '<td style="text-align: center; vertical-align: middle;">' + value.post_content + '</td>' +
                                '<td style="text-align: center; vertical-align: middle;"><img width="50" height="50" src="/uploads/' + value.post_media + '"/></td>' +
                                '<td style="text-align: center; vertical-align: middle;"><div class="btn-group m-b-sm">' +
                                '<button type="button" class="btn btn-danger">Action</button>' +
                                '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">' +
                                '<span class="caret"></span>' +
                                '<span class="sr-only">Toggle Dropdown</span></button>' +
                                '<ul class="dropdown-menu" role="menu">' +
                                '<li><a href="#" data-toggle="modal" data-target="#modal_post_edit" class="postEdit" data="' + value.id + '">Edit</a></li>' +
                                '<li class="divider"></li><li><a href="#" style="color:#fa1b59" class="postDelete" data="' + value.id + '">Delete</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</td>' +
                                '</tr>');
                        });
                    },
                    error: function (result) {

                    }
                });*/
            });
            //form_query

        });
    </script>
@endsection

@section('css')
    <style>
        img:hover {
            cursor: pointer;
        }
    </style>
@endsection
