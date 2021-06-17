<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Comment;

class CommentEventController extends Controller
{
    public function storeEvent(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;

        $comment->user()->associate($request->user());

        $event = Event::find($request->event_id);

        $event->comments()->save($comment);

        return back();
    }

    public function replyStoreEvent(Request $request)
    {
        $reply = new Comment();

        $reply->comment = $request->get('comment');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('comment_id');

        $event = Event::find($request->get('event_id'));

        $event->comments()->save($reply);

        return back();

    }
}
