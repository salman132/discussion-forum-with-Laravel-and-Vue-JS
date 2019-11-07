<?php

namespace App\Http\Controllers;

use App\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('series.create');
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
        $request->validate([
            'title'=>'required|max:255',
            'image'=>'required|image',
            'description'=> 'required'
        ]);

        $series = new Series();

        $series->user_id = Auth::id();
        $series->title = $request->title;
        $series->slug = Str::slug($request->title);
        $series->description = $request->description;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/series/',$image_new_name);
            $series->image = 'uploads/series/'.$image_new_name;
        }
        $series->save();
        return redirect()->route('series.show',$series->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $series = Series::where('slug',$id)->first();


        return view('series.show')->with('series',$series);
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
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'=>'required|max:255',
            'description'=> 'required'
        ]);

        $series = Series::where('slug',$slug)->first();

        $series->user_id = Auth::id();
        $series->title = $request->title;
        $series->slug = Str::slug($request->title);
        $series->description = $request->description;
        if($request->hasFile('image')){
            if(file_exists($series->image)){
                unlink($series->image);
            }
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/series/',$image_new_name);
            $series->image = 'uploads/series/'.$image_new_name;
        }
        $series->save();
        return redirect()->route('series.show',$series->slug);
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
