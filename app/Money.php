<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    protected $fillable = [
        'bikash', 'product_image','name','email','r_name','r_num'
    ];
}
