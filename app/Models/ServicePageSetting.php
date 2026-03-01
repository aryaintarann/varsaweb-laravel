<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePageSetting extends Model
{
    protected $fillable = [
        'badge_text', 'title', 'description',
        'tag_1', 'tag_2', 'tag_3',
        'stat_1_label', 'stat_1_value', 'stat_2_label', 'stat_2_value',
        'approach_text',
    ];
}
