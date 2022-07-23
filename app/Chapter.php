<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapters';
    
    protected $fillable = [
        'name', 'coourse_id'
    ];

    public function lessons()
    {
        return $this->hasMany('App\Lesson')->orderBy('id', 'ASC');
    }
}
