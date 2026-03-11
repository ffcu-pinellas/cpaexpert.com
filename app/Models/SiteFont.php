<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteFont extends Model
{
    protected $fillable = [
        'name',
        'font_family',
        'source',
    ];
}
