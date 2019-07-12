<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Post;
use App\Location;
use App\User;
use Image;


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
        return view('posting.post_list',[
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
        return view('posting.create_post',[
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
            'description' => 'required|max:2000',
            'email' => 'email|required|max:255',
            'phone' => 'required|max:15',
            'images.*' => 'image|nullable'
        ]);
        $posts = new Post;
        $posts->user_id = Auth()->user()->id;
        $posts->category_id = $request->input('category_id');
        $posts->location_id = $request->input('location_id');
        $posts->title = $request->input('title');
        $posts->url = $request->input('url');
        $posts->description = $request->input('description');
        $posts->email = $request->input('email');
        $posts->phone = $request->input('phone');

        if($request->hasFile('images')){
            foreach($request->file('images') as $images){
                $imageName = rand(1234567890, 987654321).'.'.$images->getClientOriginalExtension();
                $location = public_path('images/'.$imageName);
                Image::make($images)->resize(1000, 650)->save($location);
                $data[] = $imageName;
                $posts->images = json_encode($data);
            }
        }else{
            $data[] = 'no_image.jpg';
            $posts->images = json_encode($data);
        }

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
            $this->validate($request, [
                'category_id' => 'required|integer',
                'location_id' => 'required|integer',
                'title' => 'required|max:255',
                'url' => "required|max:255|alpha_dash|unique:posts,url,$id",
                'description' => 'required|max:2000',
                'email' => 'email|required|max:255',
                'phone' => 'required|max:15',
                'images.*' => 'image|sometimes'
            ]);

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
            foreach($request->file('images') as $images){
                $imageName = rand(1234567890,987654321).'.'.$images->getClientOriginalExtension();
                $location = public_path('images/'.$imageName);
                Image::make($images)->resize(1000, 650)->save($location);
                $oldImages = $posts->images;
                if($oldImages !== 'no_image.jpg'){
                    Storage::delete($oldImages);
                }
                $data[] = $imageName;
                $posts->images = json_encode($data);
            }
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
       $posts = Post::find($id);
       if($posts->images !== 'no_image.jpg'){
           Storage::delete($posts->images);
       }
       $posts->delete();

       return redirect()->route('post.list')->withSuccess('Post Deleted Successfully');
    }
}
