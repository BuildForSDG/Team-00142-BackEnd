<?php

use Illuminate\Database\Seeder;
use App\typeOfProject;
class typeOfProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeOfProjects = [
            [
                'name' => 'Community Based Projects',
                'description'=>'Community Based Projects'
            ],
            [
                'name' => 'Group Based Projects',
                'description'=>'Group Based Projects'
            ],
            [
                'name' => 'Individual Projects',
                'description'=>'Individual Projects'
            ],
            
        ];

        foreach($typeOfProjects as $key => $value){

            typeOfProject::create($value);

        }
    }
}
