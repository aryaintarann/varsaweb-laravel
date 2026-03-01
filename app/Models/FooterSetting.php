<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSetting extends Model
{
    protected $fillable = [
        'tagline',
        'address',
        'email',
        'phone',
        'twitter_url',
        'linkedin_url',
        'instagram_url',
        'copyright_text',
    ];
}
