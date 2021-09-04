<?php

namespace App\LaSeed;

use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    protected $table = 'admin_menu';
    protected $fillable = ['id', 'parent_id', 'order', 'title', 'icon', 'uri','permission'];
}
