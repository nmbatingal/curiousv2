<?php

namespace App\Model\Admin\Category;

use Illuminate\Database\Eloquent\Model;

class CategorySubdomain extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_subdomain',
        'category_domain_id',
    ];
}
