<?php

namespace App\LaSeed;

use Illuminate\Database\Eloquent\Model;

class AdminRoles extends Model
{
    protected $table = 'admin_roles';
    protected $fillable = ['id', 'name', 'slug'];
}
