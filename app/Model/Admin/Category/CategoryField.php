<?php

namespace App\Model\Admin\Category;

use App\Model\Admin\Category\CategoryDomain;
use App\Model\Admin\Category\CategorySubdomain;

use Illuminate\Database\Eloquent\Model;

class CategoryField extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_field',
    ];

    public function catDomains()
    {
        return $this->hasMany(CategoryDomain::class, 'category_field_id');
    }
}