<?php

namespace App\Model\Admin\Category;

use App\Model\Admin\Category\CategoryField;
use App\Model\Admin\Category\CategorySubdomain;

use Illuminate\Database\Eloquent\Model;

class CategoryDomain extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_domain',
        'category_field_id',
    ];

    public function catField()
    {
        return $this->belongsTo(CategoryField::class, 'category_field_id');
    }

    public function catSubdomains()
    {
        return $this->hasMany(CategorySubdomain::class, 'category_subdomain_id');
    }
}
