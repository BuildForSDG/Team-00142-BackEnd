<?php

use Illuminate\Database\Seeder;
use App\projectDemographic;
class projectDemographicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $projectDemographics = [
            [
                'name' => 'Youth',
            ],
            [
                'name' => 'People Living With Disability',
            ],
            [
                'name' => 'Women',
            ],
            [
                'name' => 'Vulnerable In Society',
            ],
            
        ];

        foreach($projectDemographics as $key => $value){

            projectDemographic::create($value);

        }
    }
}
