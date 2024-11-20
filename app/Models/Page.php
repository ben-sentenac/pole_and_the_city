<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = ['title','slug','content','banner_image'];

    public function settings() {
        return $this->hasMany(Setting::class);
    }
}
