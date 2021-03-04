<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{   
    protected $fillable = [
        'email',
        'acciones', 
        'ip',
        'created_at',
        'updated_at',  
    ];

}
