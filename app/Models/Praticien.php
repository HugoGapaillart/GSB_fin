<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Praticien extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'praticien';
    protected $primaryKey = 'PRA_NUM';
    public $timestamps = false;
    public $incrementing = false;
}