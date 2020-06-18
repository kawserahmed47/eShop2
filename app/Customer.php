<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable
{
     //use Notifiable;
     protected $guard = 'customer';
     protected $table = 'customers';
 
     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = [
         'name', 'phone', 'password', 'status'
     ];
 
     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
     protected $hidden = [
         'password', 'status',
     ];
 
     /**
      * The attributes that should be cast to native types.
      *
      * @var array
      */
     protected $casts = [
         'mobile_verified_at' => 'datetime',
     ];
}
