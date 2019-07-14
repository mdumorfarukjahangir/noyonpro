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
        $categories = Category::take(5)->inRandomOrder()->get();
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
        $categories = Category::take(5)->inRandomOrder()->get();
        $randomposts = Post::all()->random(3);
        return view('single-post',compact('post','randomposts','ads','categories','tags','resentposts'));
    }

    public function postByCategory($slug)
    {
        $categories = Category::take(5)->inRandomOrder()->get();
        $ads = Address::all();
        $tags = Tag::all();
        $resentposts  = Post::latest()->get();
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->get();
        return view('category',compact('categories','category','posts','ads','tags','resentposts'));
    }
    public function postByTag($slug)
    {
        $categories = Category::take(5)->inRandomOrder()->get();
        $ads = Address::all();
        $tags = Tag::all();
        $resentposts  = Post::latest()->get();
        $tag = Tag::where('slug',$slug)->first();
        $posts = $tag->posts()->get();
        return view('tag',compact('tag','posts','tags','resentposts','categories','ads'));
    }
}
