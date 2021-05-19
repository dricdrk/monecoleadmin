<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
        'name', 'state', 'adress', 'mail','phone_number',
    ];
}
