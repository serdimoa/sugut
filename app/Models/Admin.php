<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    public function adminAuth($login,$password){
        $admin = Admin::whereLogin($login)->first();
        if (!$admin) return null;
        if ($admin->password === $password ){
            return $admin;
        }else return null;
    }
}
