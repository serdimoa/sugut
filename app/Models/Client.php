<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'client';
    public function checkPhone($phone){
        $phone = "+7 (666) 666-6665";
//        $user = Client::wherePhone($phone)->first();
        $user = all();
        return $user;/*
        if ($user) return null;
        else return $user;-*/
        
    }
}
