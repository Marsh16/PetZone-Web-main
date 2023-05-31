<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'petOwner_name',
        'pet_name',
        'pet_type',
        'start_date',
        'end_date',
        'payment_method',
        'total_price',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($timestamp) {
        return Carbon::parse($timestamp)->locale('id-ID')->translatedFormat('H:i | d F Y');
    }
}
