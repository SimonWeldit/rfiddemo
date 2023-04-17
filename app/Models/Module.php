<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';
    protected $fillable = ['title', 'description', 'course_id'];

    public function course() {
        return $this->belongsTo('App\Models\Course');
    }

    public function lessons() {
        return $this->hasMany('App\Models\Lesson');
    }
}
