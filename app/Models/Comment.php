<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = ['id'];
    public $timestamp = true;

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
