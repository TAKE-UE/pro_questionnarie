<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for( $cnt = 1; $cnt <= 10; $cnt++){
            $faker = Faker\Factory::create('ja_JP');

            User::create([
                'name' => $faker->lastName. '' .$faker->firstName,
                'email' => $faker->email,
                'password' => Hash::make('password'),
            ]);
        }
        // DB::table('users')->insert([
        //     'name' => 'UserName',
        //     'email' => 'User@mail.cc',
        //     'password' => bcrypt('password'),
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        // ]);
    }
}
