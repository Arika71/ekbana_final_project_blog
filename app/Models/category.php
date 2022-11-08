<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','type','description'];

    public function blogs(){
        return $this->hasMany(blogs::class);
    }

  
}
