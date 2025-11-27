<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    protected $fillable = [
        'name',
        'description',
        'email',
        'phone1',
        'phone2',
        'phone3',
        'logo_path',
        'mission',
        'vision',
        'values',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'instagram_url'
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
