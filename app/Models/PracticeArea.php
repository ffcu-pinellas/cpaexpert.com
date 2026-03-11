<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeArea extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'icon',
        'short_description',
        'content',
    ];
}
