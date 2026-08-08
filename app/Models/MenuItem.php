<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['name', 'description', 'ingredients', 'price', 'weight', 'category', 'tag', 'image_url', 'is_featured'];

    protected $casts = [
        'is_featured' => 'boolean',
        'price' => 'integer',
    ];

    // The `category` column stores one or more category slugs, comma-separated.
    public function categorySlugs(): array
    {
        return array_values(array_filter(array_map('trim', explode(',', (string) $this->category))));
    }
}
