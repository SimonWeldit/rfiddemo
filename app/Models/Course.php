<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'instructor_id'];

    public function instructor() {
        return $this->belongsTo('App\Models\User', 'instructor_id');
    }

    public function modules() {
        return $this->hasMany('App\Models\Module');
    }
}
