<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteColor extends Model
{
    protected $fillable = [
        'name',
        'hex_code',
    ];
}
