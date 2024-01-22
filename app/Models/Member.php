<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey = "member_id";
    function group()
    {
        //hasOne shows only one to one relation data or you can say single data
        // return $this->hasOne('App\Models\Group','group_id');

        //one-to-many shows relationships to more than one fields
        //match both tables keys otherwise it will conflict
        return $this->hasMany('App\Models\Group', 'group_id', 'group_id');
    }
}
