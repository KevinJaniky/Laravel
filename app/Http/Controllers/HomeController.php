<?php

namespace App\Http\Controllers;

use App\Modules\Blog\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        $post = Post::where('lang',$lang)->orderBy('created_at','desc')->limit(4)->get();
        return view('home',compact('post'));
    }
}
