<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StaffProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'phone',
        'email',
        'address',
        'area',
        'town',
        'id_number',
        'county',
        'date_of_birth',
        'employment_status',
        'contract_start_date',
        'contract_end_date',
        'nurse_license_number',
        'specialty',
        'title',
        'pay_rate',
        'criminal_background_check',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
