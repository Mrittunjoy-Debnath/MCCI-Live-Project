<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invest extends Model
{
    protected $fillable = [
        'investment', 'daily_income',
    ];
}
