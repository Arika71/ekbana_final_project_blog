<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;

    protected $fillable = ['id','title','author','tags','description','image','category_id'];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function comment(){
        return $this->hasMany(comments::class);
    }
}
