<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Post;
use App\Location;
use App\User;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('posting.start_posting',[
            'posts' => $user->posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('posting.post_listing',[
            'categories' => $categories,
            'locations' => $locations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|integer',
            'location_id' => 'required|integer',
            'title' => 'required|max:255',
            'url' => 'required|max:255|alpha_dash',
            'description' => 'required|max:300',
            'email' => 'email|required|max:255',
            'phone' => 'required|max:15',
            'images.*' => 'image|nullable|mimes:jpeg,jpg,png,gif,svg|max:2000'
        ]);

        if($request->hasFile('images')){
            foreach ($request->file('images') as $images) {
                $imageNameNoExt = $images->getClientOriginalName();
                $imageName = pathinfo($imageNameNoExt, PATHINFO_FILENAME);
                $imageExtension = $images->getClientOriginalExtension();
                $imageRealName = rand(123456,8765432).'_'.time().'.'.$imageExtension;
                $location = $images->storeAs('public/post_images/',$imageRealName);
                //$images->move(public_path().'/post_images/',$imageRealName);
                $data[] = $imageRealName;
            }
        }else{
            $data[] = 'no_image.jpg';
        }

        $posts = new Post;
        $posts->user_id = Auth()->user()->id;
        $posts->category_id = $request->input('category_id');
        $posts->location_id = $request->input('location_id');
        $posts->title = $request->input('title');
        $posts->url = $request->input('url');
        $posts->description = $request->input('description');
        $posts->email = $request->input('email');
        $posts->phone = $request->input('phone');
        $posts->images = json_encode($data);

        $posts->save();

        return redirect()->route('post.create')->withSuccess('Post Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        $categories = Category::all();
        $locations = Location::all();
        return view('posting.show', [
            'posts' => $posts,
            'categories' => $categories,
            'locations' => $locations
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);

        $categories = Category::all();
        $category_array = [];
        foreach($categories as $category){
            $category_array[$category->id] = $category->name;
        }

        $locations = Location::all();
        $locations_array = [];
        foreach($locations as $location){
            $locations_array[$location->id] = $location->name;
        }
        return view('posting.edit', [
            'posts' => $posts,
            'categories' => $category_array,
            'locations' => $locations_array
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Post::find($id);

        if($request->input('url') == $posts->url){
            $this->validate($request, [
                'category_id' => 'required|integer',
                'location_id' => 'required|integer',
                'title' => 'required|max:255',
                'description' => 'required|max:300',
                'email' => 'email|required|max:255',
                'phone' => 'required|max:15',
                'images.*' => 'image|nullable|mimes:jpeg,jpg,png,gif,svg|max:2000'
            ]);
        }else{
            $this->validate($request, [
                'category_id' => 'required|integer',
                'location_id' => 'required|integer',
                'title' => 'required|max:255',
                'url' => 'required|max:255|alpha_dash|unique:post, url',
                'description' => 'required|max:300',
                'email' => 'email|required|max:255',
                'phone' => 'required|max:15',
                'images.*' => 'image|nullable|mimes:jpeg,jpg,png,gif,svg|max:2000'
            ]);
        }

        if($request->hasFile('images')){
            foreach ($request->file('images') as $images) {
                $imageNameNoExt = $images->getClientOriginalName();
                $imageName = pathinfo($imageNameNoExt, PATHINFO_FILENAME);
                $imageExtension = $images->getClientOriginalExtension();
                $imageRealName = rand(123456,8765432).'_'.time().'.'.$imageExtension;
                $location = $images->storeAs('public/post_images/',$imageRealName);
                //$images->move(public_path().'/post_images/',$imageRealName);
                $data[] = $imageRealName;
            }
        }

        $posts = Post::find($id);
        $posts->user_id = Auth()->user()->id;
        $posts->category_id = $request->input('category_id');
        $posts->location_id = $request->input('location_id');
        $posts->title = $request->input('title');
        $posts->url = $request->input('url');
        $posts->description = $request->input('description');
        $posts->email = $request->input('email');
        $posts->phone = $request->input('phone');
        if($request->hasFile('images')){
            $posts->images = json_encode($data);
        }

        $posts->save();

        return redirect()->route('post.show', $posts->id)->withSuccess('Post Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
