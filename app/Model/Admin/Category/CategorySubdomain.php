<?php

namespace App\Model\Admin\Category;

use App\Model\Admin\Category\CategoryDomain;

use Illuminate\Database\Eloquent\Model;

class CategorySubdomain extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_subdomain',
        'category_domain_id',
    ];

    public function catDomain()
    {
        return $this->belongsTo(CategoryDomain::class, 'category_domain_id');
    }

    // scope
    public function scopeOfCategory($query)
    {
        return $query->with('catDomain.catField');
    }
}
