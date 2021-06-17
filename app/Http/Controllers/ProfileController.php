<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Place;
use Auth;

class ProfileController extends Controller
{
    public $post;
    

    public function index(User $user)
    {
        $users=User::find($user->id);
        
        
        return view('profiles.index',compact('users','user'));
    }
    
    
    public function show($id)
    {
        $user=User::find($id);
        $posts = User::find($id)->posts;
        $places = User::find($id)->places;
        
     
        
        return view('profiles.show', compact('user','posts','places'));
    }
}
