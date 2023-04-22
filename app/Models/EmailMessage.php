<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmailMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'to',
        'subject',
        'message',
        'attachment',
        'user_id',
        'reference'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
