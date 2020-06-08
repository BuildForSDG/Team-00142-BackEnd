<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'one@mail.com',
                'password'=> Hash::make('120120120'),
            ],
            [
                'email' => 'two@mail.com',
                'password'=> Hash::make('120120120'),
            ],
            [
                'email' => 'three@mail.com',
                'password'=> Hash::make('120120120'),
            ],
            
        ];

        foreach($users as $key => $value){

            User::create($value);

        }
    }
}
