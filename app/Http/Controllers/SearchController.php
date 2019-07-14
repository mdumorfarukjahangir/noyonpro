<?php
namespace App\Http\Controllers;
use App\Post;
use App\Address;
use App\Tag;
use App\Category;


use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // return $request->all();
        $categories = Category::take(5)->inRandomOrder()->get();

        $ads = Address::all();
        $tags = Tag::all();
        $resentposts  = Post::latest()->get();
        $query = $request->input('query');
        $posts = Post::where('title','LIKE',"%$query%")->get();
        return view('search',compact('posts','query','categories','ads','tags','resentposts'));
    }
}
