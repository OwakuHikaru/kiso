<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
    'user_id',
    'category_id',
    'lock',
    'body',
    ];
   
   public function user()   
    {
    return $this->belongsTo(User::class);  
    }
   
   public function comments()
    {
    return $this->hasMany(Comment::class);
    }
    
    public function bookmarks()
    {
    return $this->hasMany(Bookmark::class);
    }
    
    public function category() 
    {
    return $this->belongsTo(Category::class);  
    }
    
    public function likes()
    {
    return $this->hasMany(Like::class);
    }
}