<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Trademark extends Model
{	
	use Notifiable;

    protected $table = 'trademarks';
}
