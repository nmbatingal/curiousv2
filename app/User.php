<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Research\FollowResearcher;
use App\Models\Research\ResearchArticle;

class User extends Authenticatable
{
    use Notifiable;
    // use Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'first_name', 
        'middle_name', 
        'last_name',
        'email',
        'password',
        'avatar',
        'is_admin',
        'active',
        'activation_token',
        'is_researcher',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'provider_name', 
        'provider_id', 
        'password', 
        'remember_token',
        'activation_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function follows() {
        return $this->hasMany(FollowResearcher::class, 'user_id', 'id');
    }

    public function followers() {
        return $this->hasMany(FollowResearcher::class, 'researcher_id', 'id');
    }

    public function isFollowing($researcher_id)
    {
        return (bool) $this->follows()->where('researcher_id', $researcher_id)->first(['id']);
    }

    public function researchUploads()
    {
        return $this->hasMany(ResearchArticle::class, 'uploader_id', 'id');
    }
}
