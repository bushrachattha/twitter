<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comments;

use App\Follower;
use Auth;


class PostController extends Controller
{
//
// @return void
// */
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

    // die("iiii");
// $users = new User;
// $profilefollowers = $users = $users->get();
// $user = Auth::user();

// $follower = new Follower;
// $follower = $follower->where("user_id",$user->id)->where("following", 1)->get(array('id'))->toArray();


$post = new Post;
$posts = $post->get();

$postscollection = array();
foreach ($posts as $post) {
$newPost = $post;
$posts= Post::find($post->id)->comments;
$newPost['comments'] = $comments;
$postscollectionCollection[] = $newPost;
}
$posts = $postscollection;

return view('home',compact('posts'));
}


public function savePost(Request $request){
$user = Auth::user();
$post = new Post;
$post ->user_id = $user->id;
$post ->post = $request->tweet;
$post -> save();
return redirect('home');
}



public function saveComment(Request $request){
$user = Auth::user();
$comment = new Comments;
$comment ->user_id = $user->id;
$comment ->post_id = $request->post_id;
$comment ->comments = $request->comment;
$comment-> save();
return redirect('home');
}
}





public function deletePost(Request $request){

$post = Post::find($request->post_id);
if($post){
Post::destroy($request->post_id);
}








//
// --
// namespace App\Http\Controllers;
//
// use Illuminate\Http\Request;
//
// use Auth;
//
// class PostController extends Controller
// {
// public function index(){
//
// $post = new Post;
// $posts = $post->get();
//
// $postscollection = array();
// foreach($tweets as $tweet){
//     $newPost = $post;
//     $comments = Tweet::find($tweet->id)->comments;
//     $newpost['comments'] = $comments;
//     $postscollection[] = $newPost;
// }
//
// $posts = $postscollection;
// return view('home', compact('posts','potentialFollowers','sitname'));
//
//
// }
//
//   public function savePost(Request $request){
//
//
// $user = Auth::user();
// $post = new Post;
// $post->user_id = $user->id;
// $post->post = $request->post;
// $post->save();
// return redirect('home');
//
//
//   }
//
//
//
// public function saveComments(Request $request){
//
//
//
//
// $user = Auth::user();
// $comment = new comment;
// $comment->user_id = $user->id;
// $comment->post_id = $request->post_id;
// $comment->comment = $request->comment;
// $post->save();
// return redirect('home');
//
//
// }



    // public function index(Request $request, Post $post)
    //  {
    //      $posts = $post->whereIn('user_id', $request->user()->following()
    //                      ->pluck('users.id')
    //                      ->push($request->user()->id))
    //                      ->with('user')
    //                      ->orderBy('created_at', 'desc')
    //                      ->take($request->get('limit', 10))
    //                      ->get();
    //
    //      return response()->json($posts);
    //  }
    //  public function store(Request $request, Post $post)
    //  {
    //      $newPost = $request->user()->posts()->create([
    //          'body' => $request->get('body')
    //      ]);
    //
    //      return response()->json($post->with('user')->find($newPost->id));
    //  }
    //
