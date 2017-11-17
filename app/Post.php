<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title', 'body'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
