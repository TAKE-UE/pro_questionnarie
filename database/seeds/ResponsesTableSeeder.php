<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Cache\Factory;
use Faker\Generator as Faker;

class ResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // $response = new \App\Response([
        //     'response' => 1,
        //     'answers_id' => $faker->numberBetween($min = 4, $max = 7),
        //     'questionnaires_id' => 4,
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        // ]);
        // $response->save();

        factory(\App\Response::class, 30)->create();

        // for ($i = 0; $i < 50; $i++) {
        //     DB::table('responses')->insert([
        //         'response' => 1,
        //         'answers_id' => $faker->randomDigit(4, 7),
        //         'questionnaires_id' => 4,
        //         'created_at' => new DateTime(),
        //         'updated_at' => new DateTime(),
        //     ]);

        // for ($i = 0; $i < 10; $i++) {
        //     \App\Response::create([
        //         'response' => 1,
        //         'answers_id' => 4,
        //         'questionnaires_id' => 4,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
