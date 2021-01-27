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
        DB::table('theloai')->insert([
            ['id'=>1,'ten'=>'Bài 1', 'tenkhongdau'=>'Bai 1'],
        ]);
        DB::table('loaitin')->insert([
            ['id'=>1,'idtheloai'=>'1', 'ten'=>'Tạo SP', 'tenkhongdau'=>'Tao SP', 'id_theloai'=>'1'],
        ]);
        DB::table('tintuc')->insert([
            ['id'=>1,'tieude'=>'Hiển thị', 'tieudekhongdau'=>'Hien thi', 'tomtat'=>'HT', 'noidung'=>'Đi học',
                'hinh'=>'1', 'noibat'=>'1', 'soluotxem'=>'4', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
        ]);
        DB::table('comment')->insert([
            ['id'=>1,'iduser'=>'1', 'idtintuc'=>'1', 'noidung'=>'Hay', 'tintuc_id'=>'1'],
        ]);
        DB::table('users')->insert([
            ['id'=>1,'name'=>'chien', 'email'=>'chien@gmail.com', 'password'=>bcrypt('chien@123ne'),
                'number'=>'0963328520', 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>2,'name'=>'chien2', 'email'=>'chien2@gmail.com', 'password'=>bcrypt('chien@123ne'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
            ['id'=>3,'name'=>'chien', 'email'=>'chien1@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>4,'name'=>'chien2', 'email'=>'chien12@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
            ['id'=>5,'name'=>'chien', 'email'=>'chien222@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>6,'name'=>'chien2', 'email'=>'chien22@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
            ['id'=>7,'name'=>'chien', 'email'=>'chien3@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>8,'name'=>'chien2', 'email'=>'chien32@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
            ['id'=>9,'name'=>'chien', 'email'=>'chien4@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>10,'name'=>'chien2', 'email'=>'chien42@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
            ['id'=>11,'name'=>'chien', 'email'=>'chien5@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>12,'name'=>'chien2', 'email'=>'chien52@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
            ['id'=>13,'name'=>'chien', 'email'=>'chien6@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>14,'name'=>'chien2', 'email'=>'chien62@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
            ['id'=>15,'name'=>'chien', 'email'=>'chien7@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>16,'name'=>'chien2', 'email'=>'chien72@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
            ['id'=>17,'name'=>'chien', 'email'=>'chien8@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'1', 'comment_id'=>'1'],
            ['id'=>18,'name'=>'chien2', 'email'=>'chien82@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'level'=>'2', 'comment_id'=>'1'],
        ]);
    }
}
