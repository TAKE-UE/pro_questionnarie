<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'answer' => 'サッカー',
            'questionnaire_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '野球',
            'questionnaire_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'ラグビー',
            'questionnaire_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'ゴルフ',
            'questionnaire_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '東京',
            'questionnaire_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '大阪',
            'questionnaire_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '横浜',
            'questionnaire_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '福岡',
            'questionnaire_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'フットサル',
            'questionnaire_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'キックボクシング',
            'questionnaire_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '筋トレ',
            'questionnaire_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'ランニング',
            'questionnaire_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '東京',
            'questionnaire_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '横浜',
            'questionnaire_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '大阪',
            'questionnaire_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '福岡',
            'questionnaire_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'お金',
            'questionnaire_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '時間',
            'questionnaire_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '家族',
            'questionnaire_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '彼女',
            'questionnaire_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'キャンプ',
            'questionnaire_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'DIY',
            'questionnaire_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => 'バイクレストア',
            'questionnaire_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('answers')->insert([
            'answer' => '勉強',
            'questionnaire_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
