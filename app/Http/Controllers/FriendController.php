<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;
use Auth;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    public function index()
    {
        $users = User::all()->except(Auth::id());
        $friendships=Auth::user()->friends;
        $results = DB::select('SELECT * FROM users WHERE id NOT IN (SELECT friends.friend_id FROM users LEFT JOIN friends ON users.id=friends.user_id WHERE users.id = :id)', ['id' => Auth::id()]);
        
        
        return view('Friends.index', compact('users','friendships','results'));
    }
    public function addFriend(Friend $friend,Request $request)
    {
        $friend = new Friend();
        $friend->user_id = $request->user_id;
        $friend->friend_id = $request->friend_id;

        $friend->save();
        return redirect()->back()->with('addFriend', 'your message,here');

    }


    public function myFriend()
    {
        $users = User::all()->except(Auth::id());
        $friendships=Auth::user()->friends;

        return view('Friends.myFriend',compact('users','friendships'));
    }

    public function deletefriendship(Request $request){
        $request->validate([
            'user_id' => 'required',
            'friend_id' => 'required',
            ]);
        $deleteFriendship= Friend::where('user_id',Auth::user()->id)->where('friend_id',$request->friend_id)->delete();
        return redirect()->back()->with('deleteFriend', 'Artık arkadas değilsin');


    }
}
