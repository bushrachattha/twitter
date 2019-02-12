<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Post extends Model
{

    public function comments(){
        return $this->hasMany('App\comments');
    }
    protected $fillable = ['user_id', 'body'];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
