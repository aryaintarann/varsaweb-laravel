<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($portfolio) {
            $portfolio->slug = Str::slug($portfolio->title);
        });

        static::updating(function ($portfolio) {
            $portfolio->slug = Str::slug($portfolio->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
