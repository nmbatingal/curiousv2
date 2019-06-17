<?php

namespace App\Model\Admin\Category;

use Illuminate\Database\Eloquent\Model;

class CategoryField extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_field',
    ];
}