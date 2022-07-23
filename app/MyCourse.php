<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCourse extends Model
{
    protected $tabele = 'my_courses';

    protected $fillable = [
        'course_id', 'user_id'
    ];

    public function courses() 
    {
        return $this->belongTol('App\Course');
    }
}
