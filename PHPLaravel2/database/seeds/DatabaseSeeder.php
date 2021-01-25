<?php

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
        DB::table('users')->insert([
            ['name'=>'chien', 'email'=>'chien@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'status'=>'1'],
            ['name'=>'chien2', 'email'=>'chien2@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'status'=>'2'],
            ]);
    }
}
