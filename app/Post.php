<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    public $fillable = ['title', 'body', 'user_id'];

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filter){

        if($month = isset($filter['month'])){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        
        if($year = isset($filter['year'])){
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives() {

        return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }
    
}
