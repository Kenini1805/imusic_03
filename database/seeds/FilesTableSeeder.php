<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('files')->insert([
        	'name' => 'Lạc Trôi',
        	'slug_name' => 'Lac-Troi',
        	'path' => 'fileupload/file/Lac-Troi-Son-Tung-M-TP.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '8',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Mình Là Gì Của Nhau',
        	'slug_name' => 'Minh-La-Gi-Cua-Nhau',
        	'path' => 'fileupload/file/Minh-La-Gi-Cua-Nhau-Lou-Hoang.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '3',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Ngày Xưa Em Đến',
        	'slug_name' => 'Ngay-Xua-Em-Den',
        	'path' => 'fileupload/file/Ngay-Xua-Em-Den-Anh-Khang.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '2',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Ngôi Sao Đã Mất',
        	'slug_name' => 'Ngoi-Sao-Da-Mat',
        	'path' => 'fileupload/file/Ngoi-Sao-Da-Mat-LK.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '15',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Ngọt Ngào',
        	'slug_name' => 'Ngot-Ngao',
        	'path' => 'fileupload/file/Ngot-Ngao-Dong-Nhi.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '14',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Oh My Love',
        	'slug_name' => 'Oh-My-Love',
        	'path' => 'fileupload/file/Oh-My-Love-365-Band-NCT-54634596319127088750-365.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '5',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Phía Sau Một Cô Gái',
        	'slug_name' => 'Phia-Sau-Mot-Co-Gai',
        	'path' => 'fileupload/file/Phia-Sau-Mot-Co-Gai-Soobin-Hoang-Son.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '9',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Tháng 4 Là Lời Nói Dối Của Em',
        	'slug_name' => 'Thang-4-La-Loi-Noi-Doi-Cua-Em',
        	'path' => 'fileupload/file/Thang-Tu-La-Loi-Noi-Doi-Cua-Em-Ha-Anh-Tuan.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '13',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Thành Phố Buồn',
        	'slug_name' => 'Thanh-Pho-Buon',
        	'path' => 'fileupload/file/Thanh-Pho-Buon-Dam-Vinh-Hung.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '12',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Tìm',
        	'slug_name' => 'Tim',
        	'path' => 'fileupload/file/Tim-Min-Mr-A.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '11',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Tự Nhiên Buồn',
        	'slug_name' => 'Tu-Nhien-Buon',
        	'path' => 'fileupload/file/Tu-Nhien-Buon-Hoa-Minzy.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '4',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Xe Đạp',
        	'slug_name' => 'Xe-Dap',
        	'path' => 'fileupload/file/Xe-Dap-Thuy-Chi-M4U.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '1',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
        DB::table('files')->insert([
        	'name' => 'Yêu 5',
        	'slug_name' => 'Yeu-5',
        	'path' => 'fileupload/file/Yeu-5-Rhymastic.mp3',
        	'category_id' => '3',
        	'genre_id' => '3',
        	'artist_id' => '6',
        	'user_id' => '1',
        	'status' => '1',
        	'view_count' => '1000',
        	]);
    }
}
