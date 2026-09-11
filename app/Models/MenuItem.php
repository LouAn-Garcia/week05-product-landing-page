<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'description', 'price', 'dietary_label', 'is_featured', 'sort_order'];

    protected function casts(): array
    {
        return ['price' => 'decimal:2', 'is_featured' => 'boolean'];
    }
}
