<?php

namespace App;

//Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;

class User2 extends Authenticatable
{
  //Mass assignable attributes
  protected $fillable = [
      'name', 'email', 'password','ttl','alamat','jk','jabatan','no_tlp','pddk_thr','agama','status','minat',
  ];

  //hidden attributes
   protected $hidden = [
       'password', 'remember_token',
   ];

}
