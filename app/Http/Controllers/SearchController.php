<?php

use App\Post;
use App\Address;
use App\Tag;
use App\Category;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $categories = Category::all();
        $ads = Address::all();
        $tags = Tag::all();
        $resentposts  = Post::latest()->get();
        $query = $request->input('query');
        $posts = Post::where('title','LIKE',"%$query%")->approved()->published()->get();
        return view('search',compact('posts','query','categories','ads','tags','recentpost'));
    }
}
