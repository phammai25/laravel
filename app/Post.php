<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [
        'user_id', 'tag', 'catalog','content','created_at','update_at'
    ];
    public function user(){
        return $this->belongsTo('App\Post');
    }
   
}
