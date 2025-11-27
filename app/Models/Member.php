<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'firm_id',
        'first_name',
        'last_name',
        'position',
        'bio',
        'photo_path',
        'email',
        'phone',
        'order'
    ];

    public function firm()
    {
        return $this->belongsTo(Firm::class);
    }
}
