<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }

    public function category(){
        return $this->hasMany(Category::class, 'category_id', 'id');
    }
}
