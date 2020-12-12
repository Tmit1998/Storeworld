<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function Category()
    {
        return $this->hasMany(Category::class);
    }

    public function Images()
    {
        return $this->hasMany(Image::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
