<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone_number',
        'opening_hour',
        'closing_hour',
        'city_id',
        'price_per_day',
        'user_id',
        'business_type_id',
    ];

    public function business_images(){
        return $this->hasMany(BusinessImage::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
