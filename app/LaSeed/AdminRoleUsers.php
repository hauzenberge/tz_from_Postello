<?php

namespace App\LaSeed;

use Illuminate\Database\Eloquent\Model;

class AdminRoleUsers extends Model
{
    protected $table = 'admin_role_users';
    protected $fillable = ['id', 'role_id', 'user_id'];
}
