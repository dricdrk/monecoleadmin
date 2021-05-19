<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    protected $fillable = [
        'name', 'number_of_people', 'number_of_people_received', 'categories','institution_id',
    ];
}
