<?php

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
        $this->call([
            UserTableSeeder::class,
            QuestionnairesTableSeeder::class,
            AnswersTableSeeder::class,
            ResponsesTableSeeder::class,
            QuestionnaireUserTableSeeder::class,
            ResponseUserTableSeeder::class,
        ]);
    }
}
