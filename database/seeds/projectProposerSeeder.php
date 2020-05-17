<?php

use Illuminate\Database\Seeder;
use App\projectProposer;
class projectProposerSeeder extends Seeder
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
                'phoneNumber' => '123',
                'email'=> 'proposerone@mail.com',
                'nationalId'=> '0001',
                'name'=> 'Proposer One',
                'userId'=> '1'
            ],
            [
                'phoneNumber' => '456',
                'email'=> 'proposertwo@mail.com',
                'nationalId'=> '0002',
                'name'=>'Proposer Two',
                'userId'=> '2'
            ],
            [
                'phoneNumber' => '789',
                'email'=> 'proposerthree@mail.com',
                'nationalId'=> '0003',
                'name'=> 'Proposer Three',
                'userId'=> '3'
            ],
            
        ];

        foreach($users as $key => $value){

            projectProposer::create($value);

        }
    }
}
