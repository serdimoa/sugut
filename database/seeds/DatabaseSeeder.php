<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipient;

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
        Recipient::create([
            'email'=>'kravcov@aitisha.ru',
            'last_recipient' => 0
        ]);

        Recipient::create([
            'email'=>'serdimoa@gmail.com',
            'last_recipient' => 0
        ]);
        Recipient::create([
            'email'=>'mediamarket86@gmail.com',
            'last_recipient' => 1
        ]);


    }
}
