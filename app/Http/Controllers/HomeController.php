<?php
namespace App\Http\Controllers;
use App\Category;
use App\Portfolio;
use App\Post;
use App\Address;
use App\Countdown;
use App\Intro;
use App\Brandname;
use App\About;
use App\Im;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $ads = Address::all();
        $posts = Post::latest()->get();
        $portfolios = Portfolio::all();
        $countdowns = Countdown::all();
        $intro = Intro::first();
        $brands = Brandname::all();
        $ims = Im::all();
        $abouts = About::all();
        return view('welcome',compact('categories','posts','ads','portfolios','countdowns','intro','ims','brands','abouts'));
    }
}
