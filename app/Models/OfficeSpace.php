<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

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

    public function setNameAaatribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function photos(): HasMany
    {
        return $this->hasMany(OfficeSpacePhoto::class);
    }

    public function benefits(): HasMany
    {
        return $this->hasMany(OfficeSpaceBenefit::class);
    }
    
    public function bookingTransactions(): HasMany
    {
        return $this->hasMany(BookingTransaction::class);
    }

    public function Citi(): BelongsTo
    {
        return $this->belongsTo(city::class);
    }
}
