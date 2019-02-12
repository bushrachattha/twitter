<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comments;
use App\User;
use App\Follower;
use Auth;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = new User;
        // $profilefollowers = $users = $users->get();
        // $user = Auth::user();

        // $follower = new Follower;
        // $follower = $follower->where("user_id",$user->id)->where("following", 1)->get(array('id'))->toArray();

        $post = new Post;
        $posts = $post->get();

        $postscollection = array();
        // foreach ($posts as $post) {
        // $newPost = $post;
        // $//posts= Post::find($post->id)->comments;
        // //$newPost['comments'] = $comments;
        //
        // //$postscollectionCollection[] = $newPost;
        // }
        //$posts = $postscollection;




        return view('home',compact('posts','comments'));
    }

    public function deletePost(Request $request){

    $post = Post::find($request->post_id);
    if($post){
    Post::destroy($request->post_id);

    return redirect('home');

}

}
}
