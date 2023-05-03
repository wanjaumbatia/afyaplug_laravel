<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;
use IFRS\Traits\IFRSUser;
use IFRS\Traits\Recycling;

use Illuminate\Database\Eloquent\SoftDeletes;
use IFRS\Interfaces\Recyclable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable implements Recyclable 
{
    
    use HasApiTokens, HasFactory, Notifiable, AuthenticationLoggable, Recycling, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'enabled',
        'odoo_token',
        'created_at'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
