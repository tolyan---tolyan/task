<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['surname','name','patronymic','birthday','position','salary'];
}
