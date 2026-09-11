<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatProfile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'breed', 'age', 'personality', 'favorite_treat', 'bio', 'accent_color', 'is_featured', 'sort_order'];

    protected function casts(): array
    {
        return ['is_featured' => 'boolean'];
    }
}
