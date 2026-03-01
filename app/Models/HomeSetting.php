<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    protected $fillable = [
        'badge_text',
        'hero_title',
        'hero_description',
        'hero_image_url',
    ];
}
