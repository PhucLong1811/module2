<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curd extends Model
{
    protected $fillable = ['name','phone','email','gender','address'];
}
