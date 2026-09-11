<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['guest_name', 'email', 'phone', 'visit_date', 'visit_time', 'party_size', 'occasion', 'notes', 'status'];

    protected function casts(): array
    {
        return ['visit_date' => 'date', 'party_size' => 'integer'];
    }
}
