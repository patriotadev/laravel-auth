<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'users';

    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'role',
    ];
}
