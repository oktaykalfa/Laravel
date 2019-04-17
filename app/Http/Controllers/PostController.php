<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequests;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function createView()
    {
        return view('create');
    }

    public function createPost(FormRequests $data)

    {
        //store to post
        if ($data->validated()) {
            $user_id = Auth::user()->id;
            $post_publish_date = date("Y-m-d H:i", strtotime($data->post_publish_date));
            $post_content = trim($data->post_content);
            $post_media_new_name = NULL;

            //if input have file
            if ($data->hasFile('post_media')) {
                $post_media = $data->file("post_media");
                $post_media_ext = $post_media->getClientOriginalExtension();
                $post_media_new_name = md5(date("d.m.Y H:i:s")) . "." . $post_media_ext;
                $post_media->move(public_path('/uploads'), $post_media_new_name);

            }

            Post::create([
                'user_id' => $user_id,
                'post_media' => $post_media_new_name,
                'post_publish_date' => $post_publish_date,
                'post_content' => $post_content,
            ]);

            return response()->json(__('messages.posts.save.success'), 200);


        }
    }

    public function deletePost(Request $data)
    {


        $postsID = $data->data;
        try {
            Post::where('id', $postsID)->delete();
            return response(["status" => "Success"]);

        } catch (\Exception $e) {
            return response(["status" => "Fail"]);

        }
    }

    public function updatePost(FormRequests $data)
    {

        $post_id = trim($data->id);
        $post_content = trim($data->post_content);
        $post_publish_date = date("Y-m-d H:i:s", strtotime($data->post_publish_date));

        try {
            Post::where('id', $post_id)->update(['post_content' => $post_content, 'post_publish_date' => $post_publish_date]);
            return response(["status" => "Success"]);
        } catch (\Exception $e) {
            return response(["status" => "Fail"]);

        }

    }


}
