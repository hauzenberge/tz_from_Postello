<?php

namespace App\LaSeed;

use Illuminate\Database\Eloquent\Model;

class AdminUsers extends Model
{
    protected $table = 'admin_users';
    protected $fillable = ['id', 'username', 'password', 'name', 'avatar', 'created_at'];
}
