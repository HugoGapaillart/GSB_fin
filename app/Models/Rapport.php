<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Rapport extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'rapport_visite';
    protected $primaryKey = 'RAP_NUM';
    public $timestamps = false;
    public $incrementing = false;
}