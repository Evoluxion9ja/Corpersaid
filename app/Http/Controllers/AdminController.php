<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use App\User;
use App\Category;
use App\Location;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])){
                Session::put('adminSession', $data['email']);
                return redirect()->route('admin.dashboard')->withSuccess('Welcome to admin');
            }else{
                return redirect()->route('admin.login')->withError('Invalid Username or Password');
            }
        }
        return view('coppers.admin_dashboard.admin_login');
    }

    public function dashboard(){
        if(Session::has('adminSession')){
            //Do whatever is in here which should mostly be left empty
        }else{
            return redirect()->route('admin.login')->withError('Please To Access Dashboard, You Nedd To Be An Admin');
        }
        return view('coppers.admin_dashboard.admin_dashboard')->withSuccess('Welcome to your Dashboard');
    }


    //Category Starts from here
    public function addCategory(){
        if(Session::has('adminSession')){
        
        }else{
            return redirect()->route('admin.login')->withError('Please Login as Admin To Manage Categories');
        }
            $categories = Category::orderBy('id', 'desc')->get();
            return view('coppers.category.category',[
                'categories' => $categories
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'description' => 'required|min:3|max:255',
            'url' => 'required|min:3|max:255|alpha-dash'
        ]);

        $categories = new Category;
        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->url = $request->input('url');
        $categories->save();

        return redirect()->route('admin.category')->withSuccess('Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCategory($id)
    {
        $categories = Category::find($id);
        return view('coppers.category.show',[
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->input('url') == $category->url){
            $this->validate($request, [
                'name' => 'required|max:255|min:3',
                'description' => 'required|min:3|max:255',
            ]);
        } else{
            $this->validate($request, [
                'name' => 'required|max:255|min:3',
                'description' => 'required|min:3|max:255',
                'url' => 'required|min:3|max:255|alpha-dash|unique:category,url'
            ]);
        }

        $categories =  Category::find($id);
        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->url = $request->input('url');
        $categories->save();

        return redirect()->route('category.show', $categories->id)->withSuccess('Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategory($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('admin.category')->withSuccess('Category Deleted Successfully');
    }//Category ends Here---


    //Location Starts from here
    public function addLocation(){
        if(Session::has('adminSession')){
        
        }else{
            return redirect()->route('admin.login')->withError('Please Login as Admin To Manage Locations');
        }
            $locations = Location::orderBy('id', 'desc')->get();
            return view('coppers.location.location',[
                'locations' => $locations
            ]);
    }

    public function single($url){
        $categories = Category::where('url', '=', $url)->first();
        return view('coppers.category.single', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeLocation(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'description' => 'required|min:3|max:255',
            'url' => 'required|min:3|max:255|alpha-dash'
        ]);

        $locations = new Location;
        $locations->name = $request->input('name');
        $locations->description = $request->input('description');
        $locations->url = $request->input('url');
        $locations->save();

        return redirect()->route('admin.location')->withSuccess('Location Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showLocation($id)
    {
        $locations = Location::find($id);
        return view('coppers.location.show',[
            'locations' => $locations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateLocation(Request $request, $id)
    {
        $location = Location::find($id);
        if($request->input('url') == $location->url){
            $this->validate($request, [
                'name' => 'required|max:255|min:3',
                'description' => 'required|min:3|max:255',
            ]);
        } else{
            $this->validate($request, [
                'name' => 'required|max:255|min:3',
                'description' => 'required|min:3|max:255',
                'url' => 'required|min:3|max:255|alpha-dash|unique:location,url'
            ]);
        }

        $locations =  Location::find($id);
        $locations->name = $request->input('name');
        $locations->description = $request->input('description');
        $locations->url = $request->input('url');
        $locations->save();

        return redirect()->route('location.show', $locations->id)->withSuccess('Location Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyLocation($id)
    {
        $locations = Location::find($id);
        $locations->delete();

        return redirect()->route('admin.location')->withSuccess('Location Deleted Successfully');
    }//Category ends Here---
    
}
