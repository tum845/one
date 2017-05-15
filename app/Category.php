<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name',
        'icon',
        'brief',
        'draft',
        'color',
        'priority',
        'created_at',
        'updated_at'];
}
