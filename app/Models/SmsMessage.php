<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SmsMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'message',
        'user_id',
        'sent',
        'delivered',
        'reference',
        'sent_on',
        'delivered_on'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
