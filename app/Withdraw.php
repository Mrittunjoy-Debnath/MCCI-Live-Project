<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
        'w_taka', 'w_msg','name','email','phone',
    ];
}
