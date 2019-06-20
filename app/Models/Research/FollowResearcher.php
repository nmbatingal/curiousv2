<?php

namespace App\Models\Research;

use Illuminate\Database\Eloquent\Model;

use App\User;

class FollowResearcher extends Model
{
    protected $fillable = [
    	'user_id',
    	'researcher_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function researcher()
    {
        return $this->belongsTo(User::class, 'researcher_id', 'id');
    }
}
