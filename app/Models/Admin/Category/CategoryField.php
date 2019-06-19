<?php

namespace App\Models\Admin\Category;

use App\Models\Admin\Category\CategoryDomain;
use App\Models\Admin\Category\CategorySubdomain;

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