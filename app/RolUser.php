<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolUser extends Model
{



	protected $table = 'roles';
	
    protected $fillable = [
        'name', 'slug', 'description',
    ];

}
