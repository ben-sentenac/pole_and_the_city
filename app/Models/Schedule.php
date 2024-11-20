<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['course_id', 'event_id', 'start_time', 'end_time'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
