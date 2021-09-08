<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $fillable = [
        'name','email','level','task',
    ];
}
