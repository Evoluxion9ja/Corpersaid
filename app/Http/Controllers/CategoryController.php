<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function single($url){
        $categories = Category::where('url', '=', $url)->first();
        return view('coppers.category.single', [
            'categories' => $categories
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
        //
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
    public function destroy($id)
    {
        //
    }
}
