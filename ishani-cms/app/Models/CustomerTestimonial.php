<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerTestimonial extends Model
{
    protected $table = 'customer_testimonials';

    protected $fillable = [
        'quote',
        'name',
        'location',
        'order',
        'is_visible'
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
