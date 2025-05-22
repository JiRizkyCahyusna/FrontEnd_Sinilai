<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';  // pakai tabel 'user'

    protected $fillable = ['username', 'password'];

    protected $hidden = ['password'];
}
