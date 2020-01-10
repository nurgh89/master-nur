<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'passwword'];

    public function hobby(){
        return $this->hasOne('App\Hobby', 'users_id');
    }

}
 

