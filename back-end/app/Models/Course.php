<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'description'];

    protected $attributes = [
        'dicipline_id' => null,
    ];

    public function diciplines(): BelongsTo
    {
        return $this->belongsTo(Dicipline::class, 'dicipline_id');
    }
}
