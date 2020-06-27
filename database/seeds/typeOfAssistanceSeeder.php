<?php

use Illuminate\Database\Seeder;
use App\typeOfAssistance;
class typeOfAssistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeOfAssisatnce = [
            [
                'assistanceName' => 'Financial Assistance',
            ],
            [
                'assistanceName' => 'Proffesional Assistance',
            ],                        
        ];

        foreach($typeOfAssisatnce as $key => $value){

            typeOfAssistance::create($value);

        }
    }
}
