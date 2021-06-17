<?php

namespace App\Models;

use App\Models\User;
use App\Models\PostLike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title', 'file', 'type','location'];



    protected static function booted()
    {
        // We will automatically add the user to the post when it's saved.
        static::creating(function ($user) {
            if (auth()->user()) {
                $user->user_id = auth()->id();
            }
        });
    }


    protected $guarded = [];

    protected $withCount = [
        'likes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUser()
    {
        return $this->hasOne('App\Models\User', 'id','user_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function likes(): HasMany
{
    return $this->hasMany(PostLike::class);
}


public function isLiked(): bool
{
    if (auth()->user()) {
        return auth()->user()->likes()->forPost($this)->count();
    }

    if (($ip = request()->ip()) && ($userAgent = request()->userAgent())) {
        return $this->likes()->forIp($ip)->forUserAgent($userAgent)->count();
    }

    return false;
}

public function removeLike(): bool
{
    if (auth()->user()) {
        return auth()->user()->likes()->forPost($this)->delete();
    }

    if (($ip = request()->ip()) && ($userAgent = request()->userAgent())) {
        return $this->likes()->forIp($ip)->forUserAgent($userAgent)->delete();
    }

    return false;
}

    

    

    

    
}