<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
     protected $table='fees';
    protected $fillable = ['fee','course_id'];
    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }
}
