<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolProfession extends Model
{
    protected $table = 'school_proffesion';
    protected $fillable =['id','profession_id', 'school_id' ];
}