<?php

namespace App\Model\Admin\Category;

use Illuminate\Database\Eloquent\Model;

class CategoryDomain extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_domain',
        'category_field_id',
    ];
}
