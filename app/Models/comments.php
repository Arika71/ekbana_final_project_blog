<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    protected $fillable = ['id','comment','blog_id','user_id'];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function blogs(){
        return $this->belongsTo(blogs::class);
    }
}
