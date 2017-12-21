<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name - can overwrite
    protected $table = 'posts';
    //PRIMARY KEY - can overwrite
    public $primaryKey = 'id';
    //TimeStamps
    public $timeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
