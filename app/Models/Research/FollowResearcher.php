<?php

namespace App\Models\Research;

use Illuminate\Database\Eloquent\Model;

class FollowResearcher extends Model
{
    protected $fillable = [
    	'user_id',
    	'researcher_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function researcher()
    {
        return $this->belongsTo(User::class, 'id', 'researcher_id');
    }
}
