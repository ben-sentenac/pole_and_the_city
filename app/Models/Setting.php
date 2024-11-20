<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['page_id', 'key', 'value'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
