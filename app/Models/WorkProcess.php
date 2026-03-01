<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkProcess extends Model
{
    protected $fillable = [
        'step_label',
        'title',
        'sort_order',
    ];
}
