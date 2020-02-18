<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPerson extends Model
{
    protected $table = 'persons';
    protected $fillable = ['first_name','last_name'];
}
