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
            ['id'=>2,'ten'=>'Bài 2', 'tenkhongdau'=>'Bai 2'],
            ['id'=>3,'ten'=>'Bài 3', 'tenkhongdau'=>'Bai 3'],
            ['id'=>4,'ten'=>'Bài 4', 'tenkhongdau'=>'Bai 4'],
            ['id'=>5,'ten'=>'Bài 5', 'tenkhongdau'=>'Bai 5'],
            ['id'=>6,'ten'=>'Bài 6', 'tenkhongdau'=>'Bai 6'],
            ['id'=>7,'ten'=>'Bài 7', 'tenkhongdau'=>'Bai 7'],
            ['id'=>8,'ten'=>'Bài 8', 'tenkhongdau'=>'Bai 8'],
        ]);
        DB::table('loaitin')->insert([
            ['id'=>1,'idtheloai'=>'1', 'ten'=>'Tạo SP1', 'tenkhongdau'=>'Tao SP1', 'id_theloai'=>'1'],
            ['id'=>2,'idtheloai'=>'2', 'ten'=>'Tạo SP2', 'tenkhongdau'=>'Tao SP2', 'id_theloai'=>'2'],
            ['id'=>3,'idtheloai'=>'2', 'ten'=>'Tạo SP3', 'tenkhongdau'=>'Tao SP3', 'id_theloai'=>'2'],
            ['id'=>4,'idtheloai'=>'1', 'ten'=>'Tạo SP4', 'tenkhongdau'=>'Tao SP4', 'id_theloai'=>'1'],
            ['id'=>5,'idtheloai'=>'3', 'ten'=>'Tạo SP5', 'tenkhongdau'=>'Tao SP5', 'id_theloai'=>'3'],
            ['id'=>6,'idtheloai'=>'4', 'ten'=>'Tạo SP6', 'tenkhongdau'=>'Tao SP6', 'id_theloai'=>'4'],
            ['id'=>7,'idtheloai'=>'3', 'ten'=>'Tạo SP7', 'tenkhongdau'=>'Tao SP7', 'id_theloai'=>'3'],
            ['id'=>8,'idtheloai'=>'5', 'ten'=>'Tạo SP8', 'tenkhongdau'=>'Tao SP8', 'id_theloai'=>'5'],
            ['id'=>9,'idtheloai'=>'3', 'ten'=>'Tạo SP9', 'tenkhongdau'=>'Tao SP9', 'id_theloai'=>'3'],
            ['id'=>10,'idtheloai'=>'4', 'ten'=>'Tạo SP10', 'tenkhongdau'=>'Tao SP10', 'id_theloai'=>'4'],
        ]);
        DB::table('tintuc')->insert([
            ['id'=>1,'tieude'=>'Hiển thị1', 'tieudekhongdau'=>'Hien thi1', 'tomtat'=>'HT1', 'noidung'=>'Đi học1',
                'hinh'=>'11', 'noibat'=>'11', 'soluotxem'=>'41', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>2,'tieude'=>'Hiển thị2', 'tieudekhongdau'=>'Hien thi2', 'tomtat'=>'HT2', 'noidung'=>'Đi học2',
                'hinh'=>'12', 'noibat'=>'12', 'soluotxem'=>'42', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>3,'tieude'=>'Hiển thị3', 'tieudekhongdau'=>'Hien thi3', 'tomtat'=>'HT3', 'noidung'=>'Đi học3',
                'hinh'=>'13', 'noibat'=>'13', 'soluotxem'=>'43', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>4,'tieude'=>'Hiển thị4', 'tieudekhongdau'=>'Hien thi4', 'tomtat'=>'HT4', 'noidung'=>'Đi học4',
                'hinh'=>'14', 'noibat'=>'14', 'soluotxem'=>'44', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>5,'tieude'=>'Hiển thị5', 'tieudekhongdau'=>'Hien thi5', 'tomtat'=>'HT5', 'noidung'=>'Đi học5',
                'hinh'=>'15', 'noibat'=>'15', 'soluotxem'=>'45', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>6,'tieude'=>'Hiển thị6', 'tieudekhongdau'=>'Hien thi6', 'tomtat'=>'HT6', 'noidung'=>'Đi học6',
                'hinh'=>'16', 'noibat'=>'16', 'soluotxem'=>'46', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>7,'tieude'=>'Hiển thị7', 'tieudekhongdau'=>'Hien thi7', 'tomtat'=>'HT7', 'noidung'=>'Đi học7',
                'hinh'=>'17', 'noibat'=>'17', 'soluotxem'=>'47', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>8,'tieude'=>'Hiển thị8', 'tieudekhongdau'=>'Hien thi8', 'tomtat'=>'HT8', 'noidung'=>'Đi học8',
                'hinh'=>'18', 'noibat'=>'18', 'soluotxem'=>'48', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>9,'tieude'=>'Hiển thị9', 'tieudekhongdau'=>'Hien thi9', 'tomtat'=>'HT9', 'noidung'=>'Đi học9',
                'hinh'=>'19', 'noibat'=>'19', 'soluotxem'=>'49', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
            ['id'=>10,'tieude'=>'Hiển thị10', 'tieudekhongdau'=>'Hien thi10', 'tomtat'=>'HT10', 'noidung'=>'Đi học10',
                'hinh'=>'10', 'noibat'=>'10', 'soluotxem'=>'410', 'idloaitin'=>'1', 'loaitin_id'=>'1'],
        ]);
        DB::table('comment')->insert([
            ['id'=>1,'iduser'=>'1', 'idtintuc'=>'1', 'noidung'=>'Hay', 'tintuc_id'=>'1'],
            ['id'=>2,'iduser'=>'1', 'idtintuc'=>'1', 'noidung'=>'Hay', 'tintuc_id'=>'1'],
            ['id'=>3,'iduser'=>'1', 'idtintuc'=>'1', 'noidung'=>'Hay', 'tintuc_id'=>'1'],
            ['id'=>4,'iduser'=>'1', 'idtintuc'=>'1', 'noidung'=>'Hay', 'tintuc_id'=>'1'],
            ['id'=>5,'iduser'=>'1', 'idtintuc'=>'1', 'noidung'=>'Hay', 'tintuc_id'=>'1'],
            ['id'=>6,'iduser'=>'1', 'idtintuc'=>'1', 'noidung'=>'Hay', 'tintuc_id'=>'1'],
            ['id'=>7,'iduser'=>'1', 'idtintuc'=>'1', 'noidung'=>'Hay', 'tintuc_id'=>'1'],
        ]);
        DB::table('slide')->insert([
            ['id'=>1,'ten'=>'1', 'hinh'=>'11', 'noidung'=>'Hay1', 'link'=>'11'],
            ['id'=>2,'ten'=>'12', 'hinh'=>'12', 'noidung'=>'Hay2', 'link'=>'12'],
            ['id'=>3,'ten'=>'13', 'hinh'=>'13', 'noidung'=>'Hay3', 'link'=>'13'],
            ['id'=>4,'ten'=>'14', 'hinh'=>'14', 'noidung'=>'Hay4', 'link'=>'14'],
            ['id'=>5,'ten'=>'15', 'hinh'=>'15', 'noidung'=>'Hay43', 'link'=>'15'],
            ['id'=>6,'ten'=>'16', 'hinh'=>'16', 'noidung'=>'Hay5', 'link'=>'16'],
            ['id'=>7,'ten'=>'17', 'hinh'=>'17', 'noidung'=>'Hay6', 'link'=>'17'],
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
