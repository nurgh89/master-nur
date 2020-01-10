<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $table = 'table_hoby';

    protected $fillable = ['users_id', 'hobby'];
}
