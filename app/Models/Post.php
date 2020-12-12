<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $table = 'posts';

	public function Image()
    {
        return $this->hasOne(Image::class, 'avatar', 'id');
    }

    public function Trademark()
    {
        return $this->hasMany(Trademark::class);
    }
}
