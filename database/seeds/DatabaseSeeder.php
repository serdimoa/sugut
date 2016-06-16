<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(AdminSeeder::class);
    }
}

class AdminSeeder extends Seeder {
    public function run()
    {
        DB::table('admins')->delete();
        Admin::create([
            'login'=>'admin',
            'password'=>'27051993'
        ]);
    }
}
