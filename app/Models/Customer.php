<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Kasir extends Authenticable
{
    use Notifiable;

    protected $guard = 'customer';

    protected $fillable = [
        'name', 'email', 'username', 'password','email_verfied_at'
    ];

    protected $hidden = ['password'];
}
