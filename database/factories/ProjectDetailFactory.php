<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\projectDetail;
use App\typeOfProject;
use App\User;
use Faker\Generator as Faker;
use App\projectDemographic;
use App\typeOfAssistance;
// use App\Faker\Generator as Faker;

$factory->define(projectDetail::class, function (Faker $faker) {
    return [
        'projectName'=>$faker->sentence,
        'typeOfProjectId'=> function(){
            return typeOfProject::all()->random();
        },
        'projectDemographicId'=>function(){
            return projectDemographic::all()->random();
        },
        'projectDetails'=> $faker->paragraph,
        'typeOfAssistanceRequiredId'=> function(){
            return typeOfAssistance::all()->random();
        },
        'projectProposerId'=> function(){
            return User::all()->random();
        },
        // 'approved'=>$faker->number(1),
        'approvedById'=>function(){
            return User::all()->random();
        },

    ];
});
