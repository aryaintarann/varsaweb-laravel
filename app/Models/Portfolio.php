<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'completion_date' => 'date',
        ];
    }

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
}
