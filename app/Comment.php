<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //table name
    protected $table = 'comments';
    //primary key
    public $primaryKey = 'id';
    //Timestamps can be true or false
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Post');
    }
}
