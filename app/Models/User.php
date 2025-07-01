<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Use this if you want to extend the User model for authentication
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; //to use if you want to use Sanctum for API authentication

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable; // Use Notifiable if you want to send notifications

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
