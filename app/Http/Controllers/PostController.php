<?php

namespace App\Http\Controllers;
use App\Post;
use App\Address;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function details($slug)
    {

        $ads = Address::all();
        $tags = Tag::all();

        $post = Post::where('slug',$slug)->first();
        $categories = Category::all();
        $randomposts = Post::all()->random(3);
        return view('single-post',compact('post','randomposts','ads','categories','tags'));
    }
}
