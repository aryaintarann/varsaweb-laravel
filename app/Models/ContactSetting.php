<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $fillable = [
        'badge_text',
        'title',
        'description',
        'email',
        'phone',
        'operating_hours',
        'badge_1',
        'badge_2',
        'badge_3',
    ];
}
