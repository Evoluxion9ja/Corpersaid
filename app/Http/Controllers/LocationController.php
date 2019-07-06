<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addLocation()
    {
        $locations = Location::orderBy('id', 'desc')->get();
        return view('admin.location.add_location',[
            'locations' => $locations
        ]);
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
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'url' => 'required|min:3|max:255|alpha-dash'
        ]);

        $locations = new Location;
        $locations->name = $request->input('name');
        $locations->description = $request->input('description');
        $locations->url = $request->input('url');
        $locations->save();

        return redirect()->route('admin.location')->withSuccess('Location Created Successsfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $locations = Location::find($id);
        return view('admin.location.location_show',[
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locations = Location::findOrFail($id);
        $locations->delete();
        return redirect()->route('admin.location')->withSuccess('Location deleted successfully');
    }
}
