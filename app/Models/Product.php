<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Oders()
    {
        return $this->belongsToMany(Oder::class);
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
