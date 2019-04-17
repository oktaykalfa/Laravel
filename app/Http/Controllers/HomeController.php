<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use function MongoDB\BSON\toJSON;

use App\Helpers\Helper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPosts()
    {
        //$user = User::find(1);
        //$posts = $user->posts()->get();
        //$posts = Post::orderBy('post_publish_date', 'DESC')->with('user')->get();

        $posts = Post::where('user_id', Auth::id())->orderBy('post_publish_date', 'DESC')->get();
        return view('index')->with('posts', $posts);

        //return view('index')->with('posts', $posts);

    }


    public function formQuery(Request $data)

    {
        $publish_start_date = Helper::dateToEnglish($data->publish_start_date);
        $publish_end_date = Helper::dateToEnglish($data->publish_end_date);
        $image = $data->media_type == "All" ? -1 : 1;


        return response(Post::where([
            ['user_id', '=', Auth::id()],
            ['post_publish_date', '>=', $publish_start_date], ['post_publish_date', '<=', $publish_end_date]])->orderBy('post_publish_date', 'DESC')
            ->with('User')->join('users', 'users.id', '=', 'posts.user_id')
            ->get([
                'posts.id',
                'users.name',
                'posts.created_at',
                'posts.post_publish_date',
                'posts.post_content',
                'posts.post_media'
            ])
        );


    }
}
