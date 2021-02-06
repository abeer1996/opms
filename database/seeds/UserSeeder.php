<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
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
            'gender'=>'male',
            'contact'=>'01881927116',
            'department_id'=>'Null',
            'designation'=>'Null',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('6789'),
            'role'=>'admin'
        ]);
    }
}
