<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeSpace extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'thumbail',
        'address',
        'is_open',
        'is_full_booked',
        'price',
        'duration',
        'about',
        'city_id',
        'slug'
    ];
}
