<?php

namespace App\Models\Api;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table ='admins';
    protected $fillable =['name','email','password','created_at','updated_at'];

    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
    }

    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
    }
}
