<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfessionSkill extends Model
{
    protected $table = 'profession_skill';
    protected $fillable =['id','profession_id', 'skill_id' ];
}
