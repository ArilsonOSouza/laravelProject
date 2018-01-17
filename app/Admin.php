<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;
class Admin extends Model
{
    public $timestamps = false;

    /*
    * Return the role of the use  
    */
    public function role(){
        return $this->hasOne(Role::class,'id','role_id')->first();
    }
}
