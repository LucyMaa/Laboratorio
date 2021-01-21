<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','idPersona',
    ];

    public function persona() //es como decir le pertenece a una persona
    {
        return $this->hasOne(persona::class,'id','idPersona');
    }
    /* Esta es una funcion del proyeco de SI1
    public function combustibless() //es como decir registra muchos combustibles...
    {
        return $this->hasMany(combustibles::class,'id_inventario','id');
    } */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
