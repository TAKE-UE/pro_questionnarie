<?php

use Illuminate\Database\Seeder;

class QuestionnaireUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaire_user')->insert([
            'user_id' => '1',
            'questionnaire_id' => '3',
        ]);
    }
}
