<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use Auth;
use App\Models\UserActivity;


class EventController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }


    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'address'=> 'required',
            
            //'posted_by' => 'required',
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'content' => 'required',
            'slug' => \Str::slug($request->title)
            
            ]);
        $path = $request->file('file')->store('public/images');    
        $event = new Event();
        $event->slug    = Str::slug($request->input('title'), "-");
        $event->file = $path;
        $event->address = $request->address;
        $event->start_date = $request->start_date;
        $event->due_date = $request->due_date;

        $event->content = $request->content;
        $event->title = $request->title;
        $event->posted_by = $request->user()->id;

       
        
        

        $event->save();
        return redirect('/event')->with('success','Event created successfully!');
    }

    public function show(Event $event)
    {
        $event=Event::find($event->id);

        $katilimcilar=$event->getUser; 
        //echo $katilimcilar;
        $id = Auth::user()->id;
        $katilimDurumu=false;
        foreach($katilimcilar as $katilimci)
        {
            if($katilimci->user_id == $id)
                $katilimDurumu=true;

        }
        
        return view('events.show', compact('event','katilimcilar','katilimDurumu'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
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
        $event = Event::find($id);        
        $path = $request->file('file')->store('public/images');
        $event->file = $path;
        $event->title = $request->title;
        $event->body = $request->body;
        $event->published_at = $request->published_at;

        $event->save();
        return redirect('/event')->with('success','Event updated successfully!');
    }
}

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/event')->with('success','Post deleted successfully!');
    }
    public function addUserActivities(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'event_id' => 'required',
            ]);
        $userActivity = new UserActivity();
        $userActivity->user_id = $request->user_id;
        $userActivity->event_id = $request->event_id;
       

        $userActivity->save();
        return redirect()->back()->with('addUserActivity', 'your message,here');
    }

    public function deleteUserActivities(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'event_id' => 'required',
            ]);
        $userActivity = UserActivity::where('user_id',Auth::user()->id)->where('event_id',$request->event_id)->delete();
        return redirect()->back()->with('deleteUserActivity', 'Aktiviteden ayrıldınız.');

    }

   

    


}