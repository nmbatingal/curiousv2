<?php

namespace App\Models\Research;

use Illuminate\Database\Eloquent\Model;

use App\Uuids;
use Carbon\Carbon;
use App\Models\Admin\Category\CategoryField;
use App\Models\Admin\Category\CategoryDomain;
use App\Models\Admin\Category\CategorySubdomain;

class ResearchArticle extends Model
{
    use Uuids;

    public $incrementing = false;
    protected $table = 'research_articles';
    protected $casts = [
        'authors' => 'array',
        'access_type' => 'boolean',
        'status' => 'boolean',
    ];

    protected $fillable = [
        'publication_title', 
        'authors', 
        'research_content',
        'keywords',
        'category_field_id',
        'category_domain_id',
        'category_subdomain_id',
        'project_duration_start',
        'project_duration_end',
        'funding_agency',
        'project_cost',
        'project_location',
        'location_latitude',
        'location_longitude',
        'access_type',
        'filename',
        'filesize',
        'filepath',
        'status',
        'uploader_id',
    ];

    /**
     * Model App\CategoryField
     *
     * @var
     */
    public function catField()
    {
        return $this->belongsTo(CategoryField::class, 'category_field_id');
    }

    /**
     * Model App\categoryDomain
     *
     * @var
     */
    public function catDomain()
    {
        return $this->belongsTo(CategoryDomain::class, 'category_domain_id');
    }

    /**
     * Model App\categoryDomain
     *
     * @var
     */
    public function catSubdomain()
    {
        return $this->belongsTo(CategorySubdomain::class, 'category_subdomain_id');
    }

    // Get research posted on
    public function getUpdatedAtAttribute()
    {
        return $this->attributes['updated_at'];
    }

    public function getProjectDurationAttribute()
    {
        if ( $this->attributes['project_duration_start'] != null ) 
        {
            $start_date = date("F Y", strtotime( $this->attributes['project_duration_start'] ));
            $end_date   = date("F Y", strtotime( $this->attributes['project_duration_end'] ));

            $duration   = $start_date ." - ". $end_date;
            return $duration;
        } else {
            return "";
        }
    }

}
