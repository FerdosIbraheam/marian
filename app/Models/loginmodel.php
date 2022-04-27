<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class loginmodel extends Authenticatable
{
    use HasFactory;
    protected $table = "login";

    protected $fillable = ["name","email","password"];
}
