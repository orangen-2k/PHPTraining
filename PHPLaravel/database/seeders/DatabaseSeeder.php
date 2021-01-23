<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'name'=>'Ph1u',
//            'email'=>'phu@g1mail.com',
//            'password'=>bcrypt('123')
//        ]);
        $this->call(usserSeeder::class);
    }
}

class usserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Pchw1q1su', 'email'=>'@g1m1awdcsaild.com', 'password'=>bcrypt('123q')],
            ['name'=>'Pcchqwx1w1u', 'email'=>'@g1m1qwqassqail.com', 'password'=>bcrypt('12wc3')],
//            ['name'=>'Pchccs1cw1u', 'email'=>str_random(300).'@gw1cmqcc1asail.com', 'password'=>bcrypt('12c3a')],
        ]);
    }
}
