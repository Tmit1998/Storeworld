<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $table = 'images';

	public function Post()
    {
        return $this->hasOne(Post::class, 'id', 'avatar');
    }
}
