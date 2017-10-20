<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_Tasks extends Model
{

    public static function InCompleted(){

        return static ::where ('Is_Completed' , 0 )->get();

    }

}
