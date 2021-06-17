<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;


class PostController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }


    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
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
        $post = new Post();
        $post->slug    = Str::slug($request->input('title'), "-");
        $post->file = $path;
        $post->type = $request->type;
        $post->title = $request->title;
        $post->posted_by = $request->user()->id;

       
        
        

        $post->save();
        return redirect('/dashboard')->with('success','Post created successfully!');
    }

    public function show(Post $post)
    {
        
        return view('posts.single', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);

            if($request->hasFile('file')){
                $request->validate([
                  'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
        $post = Post::find($id);        
        $path = $request->file('file')->store('public/images');
        $post->slug    = Str::slug($request->input('title'), "-");
        $post->file = $path;
        $post->title = $request->title;
        $post->type = $request->type;
        $post->posted_by = $request->user()->id;
        $post->published_at = $request->published_at;

        $post->save();
        return redirect('/dashboard')->with('success','Post updated successfully!');
    }
}

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/dashboard')->with('success','Post deleted successfully!');
    }

   

    


}