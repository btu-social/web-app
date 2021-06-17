<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;
    protected $fillable=['title', 'file', 'type','user_id','location'];


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getUser()
    {
        return $this->hasOne('App\Models\User', 'id','posted_by');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function likes()
    {
        return $this->hasMany(Actions::class,'post_id');
    }

    public function likeCounterPost(Post $post)
    {
        return $post->likes->where('post_id',$post->id)
        ->where('action_type','like');
    }

    

    // public function likes()
    // {
    //     return $this->hasMany(Actions::class,'post_id');
    // }

    // public function likeCounterPost(Post $post)
    // {
    //     return $post->likes->where('post_id',$post->id)
    //     ->where('action_type','like');
    // }

    

    
}