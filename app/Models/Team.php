<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Team extends Authenticatable
{
    protected $fillable = ['team_id', 'password', 'login_time'];

    protected $hidden = ['password'];
}
