<?php

use Illuminate\Database\Seeder;

class ResponseUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('response_user')->insert([
            [
            'user_id' => '1',
            'response_id' => '2',
            ],
            [
            'user_id' => '1',
            'response_id' => '4',
            ],
            [
            'user_id' => '1',
            'response_id' => '16',
            ],
        ]);
    }
}
