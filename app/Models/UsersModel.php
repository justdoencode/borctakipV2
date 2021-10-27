<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsersModel extends Authenticatable
{
    use HasFactory;

    protected $primaryKey='user_id';
    protected $table='Users';
    protected $fillable=['first_name','last_name','email','password'];
}
