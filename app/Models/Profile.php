<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;


class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('User');
    }
    public function getUser()
    {
        return $this->hasOne('App\Models\User', 'id','user_id');
    }

    public function getPost()
    {
        return $this->hasOne('App\Models\Post', 'id','post_id');
    }
    
}
