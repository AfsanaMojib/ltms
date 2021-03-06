<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'phone_number'=>'0171524',
            'address'=>'uttara',
            'password'=>bcrypt('12345678'),
            'role'=>'admin'

        ]);
    }
}
