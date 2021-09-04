<?php

namespace App\LaSeed;

use Illuminate\Database\Eloquent\Model;

class AdminRoleMenu extends Model
{
    protected $table = 'admin_role_menu';
    protected $fillable = ['id', 'role_id', 'menu_id'];
}
