<?php

use Illuminate\Database\Seeder;

class QuestionnairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaires')->insert([
            'question' => '好きなスポーツは？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('questionnaires')->insert([
            'question' => '住んでる地域は？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('questionnaires')->insert([
            'question' => 'あなたの趣味は？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('questionnaires')->insert([
            'question' => '遊ぶならどこ？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('questionnaires')->insert([
            'question' => 'もっとも大事なモノは？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('questionnaires')->insert([
            'question' => '自粛中なにする？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
