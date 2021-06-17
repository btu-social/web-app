<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Event extends Model
{
    


    use HasFactory;
    protected $fillable=['title', 'file', 'content','user_id','address','start_date','due_date'];



    


    protected $guarded = [];

    
    public function getUser()
    {
        return $this->hasMany('App\Models\UserActivity','event_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

}
