<?php

namespace App\Imports;

use App\Model\Admin\Category\CategoryField;
use App\Model\Admin\Category\CategoryDomain;
use App\Model\Admin\Category\CategorySubdomain;


use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CategoryImports implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $field  = CategoryField::firstOrCreate(['category_field' => $row['category_field']]);
        $domain = CategoryDomain::firstOrCreate([
                    'category_domain' => $row['category_domain'],
                    'category_field_id' => $field->id,
                ]);
        $subdomain = CategorySubdomain::firstOrCreate([
                    'category_subdomain' => $row['category_subdomain'],
                    'category_domain_id' => $domain->id,
                ]);

        return $subdomain;
    }
}
