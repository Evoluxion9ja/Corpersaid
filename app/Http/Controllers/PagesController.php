<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Location;
use Auth;
use Session;

class PagesController extends Controller
{
    public function index(){
        $locations = Location::all();
        $categories = Category::all();
        $posts = Post::orderBy('id', 'desc')->get();
        return view('pages.landingpage',[
            'categories' => $categories,
            'locations' => $locations,
            'posts' => $posts
        ]);
    }

    public function register(){
        return view('pages.register');
    }

    public function single($url){
        $posts = Post::where('url', '=', $url)->first();
        $locations = Location::all();
        $categories = Category::all();
        return view('pages.single',[
            'posts'  => $posts,
            'categories' => $categories,
            'locations' => $locations
        ]);
    }
}
