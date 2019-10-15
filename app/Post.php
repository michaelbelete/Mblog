<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //Timestamps can be true or false
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
