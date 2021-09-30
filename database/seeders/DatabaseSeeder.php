<?php

namespace Database\Seeders;

use App\Models\FormData;
use App\Models\FormLastRun;
use App\Models\Meeting;
use App\Models\Race;
use App\Models\Runner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Meeting::factory(100)->create()->each(function ($meeting) {

             Race::factory(rand(1, 5))->create([
                 'meeting_id' => $meeting->id
             ])->each( function ($race) {
                 
                Runner::factory(1)->create([
                    'race_id' => $race->id
                ])->each( function ($runner) {

                    FormData::factory(1)->create([ 'runner_id' => $runner->id]);
                    FormLastRun::factory(rand(1, 5))->create([ 'runner_id' => $runner->id]);

                });
             });


         });


    }
}
