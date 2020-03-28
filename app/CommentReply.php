<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    protected $fillable = ['comment_id', 'author', 'body', 'is_active', 'email'];

    public function comments(){
        return $this->belongsTo('App\Comment');
    }
}
