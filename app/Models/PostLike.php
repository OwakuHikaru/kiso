<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    use HasFactory;
    protected $primaryKey = ['user_id', 'post_id'];
    protected $fillable = ['post_id', 'user_id'];
    public $incrementing = false;
}
