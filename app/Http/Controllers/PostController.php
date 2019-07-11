<?php

namespace App\Http\Controllers;
use App\Post;
use App\Address;
use App\Tag;
use App\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $ads = Address::all();
        $tags = Tag::all();
        $resentposts  = Post::latest()->get();
        $posts = Post::latest()->paginate(6);
        return view('posts',compact('posts','categories','resentposts','tags','ads'));
    }
    public function details($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $blogKey = 'blog_' . $post->id;
        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }

        $ads = Address::all();
        $tags = Tag::all();


        $resentposts  = Post::latest()->get();
        $categories = Category::all();
        $randomposts = Post::all()->random(3);
        return view('single-post',compact('post','randomposts','ads','categories','tags','resentposts'));
    }
}
