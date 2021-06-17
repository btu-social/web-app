<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Place;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;


class PlaceController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }


    public function index()
    {
        $places = Place::all();
        return view('places.index', compact('places'));
    }

    public function create()
    {
        return view('places.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            //'posted_by' => 'required',
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'type' => 'required',
            'slug' => \Str::slug($request->title)
            
            ]);
        $path = $request->file('file')->store('public/images');    
        $place = new Place();
        $place->slug    = Str::slug($request->input('title'), "-");
        $place->file = $path;
        $place->type = $request->type;
        $place->title = $request->title;
        $place->posted_by = $request->user()->id;
        $place->user_id = $request->user()->id;

       
        
        

        $place->save();
        return redirect('/home')->with('success','Place created successfully!');
    }

    public function show(Place $place)
    {
        
        return view('places.single', compact('place'));
    }

    public function edit(Place $place)
    {
        return view('places.edit', compact('place'));
    }

    public function update(Place $place, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);

            if($request->hasFile('file')){
                $request->validate([
                  'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
        $place = Place::find($id);        
        $path = $request->file('file')->store('public/images');
        $place->file = $path;
        $place->title = $request->title;
        $place->body = $request->body;
        $place->published_at = $request->published_at;

        $place->save();
        return redirect('/home')->with('success','Post updated successfully!');
    }
}

    public function destroy(Place $place)
    {
        $place->delete();
        return redirect('/home')->with('success','Post deleted successfully!');
    }
}
