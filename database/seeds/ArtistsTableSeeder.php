<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artists')->insert([
        	'name' => 'Thùy Chi',
        	'slug_name' => 'Thuy-Chi',
        	'image' => 'fileupload/image/Sat-05-2017-24-52-01.jpg',

        	]);
        DB::table('artists')->insert([
        	'name' => 'Anh Khang',
        	'slug_name' => 'Anh-Khang',
        	'image' => 'fileupload/image/Sat-05-2017-13-51-01.jpg',
        	
        	]);
        DB::table('artists')->insert([
        	'name' => 'Lou Hoàng Wiki',
        	'slug_name' => 'Lou-Hoang-Wiki',
        	'image' => 'fileupload/image/Mon-05-2017-20-58-07.jpg',
        	
        	]);
        DB::table('artists')->insert([
        	'name' => 'Hòa Minzy',
        	'slug_name' => 'Hoa-Minzy',
        	'image' => 'fileupload/image/Mon-05-2017-27-59-07.jpg',
        	
        	]);    
        DB::table('artists')->insert([
        	'name' => '365 Fresh',
        	'slug_name' => '365-Fresh',
        	'image' => 'fileupload/image/Mon-05-2017-31-00-08.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'Rymastic',
        	'slug_name' => 'Rymastic',
        	'image' => 'fileupload/image/Tue-05-2017-42-16-04.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'OnlyC',
        	'slug_name' => 'OnlyC',
        	'image' => 'fileupload/image/Tue-05-2017-23-18-04.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'Sơn Tùng MTP',
        	'slug_name' => 'Son-Tung-MTP',
        	'image' => 'fileupload/image/Tue-05-2017-46-24-04.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'Sonbin Hoàng Sơn',
        	'slug_name' => 'Sonbin-Hoang-Son',
        	'image' => 'fileupload/image/Tue-05-2017-17-42-04.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'Ed Sheeran',
        	'slug_name' => 'Ed-Sheeran',
        	'image' => 'fileupload/image/Wed-05-2017-52-22-04.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'MIN, Mr. A',
        	'slug_name' => 'MIN,-Mr.-A',
        	'image' => 'fileupload/image/Thu-06-2017-45-53-08.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'Đàm Vĩnh Hưng',
        	'slug_name' => 'dam-Vinh-Hung',
        	'image' => 'fileupload/image/Thu-06-2017-05-56-08.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'Hà Anh Tuấn',
        	'slug_name' => 'Ha-Anh-Tuan',
        	'image' => 'fileupload/image/Thu-06-2017-26-17-09.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'Đông nhi',
        	'slug_name' => 'dong-nhi',
        	'image' => 'fileupload/image/Fri-06-2017-55-21-03.jpg',
        	]);
        DB::table('artists')->insert([
        	'name' => 'Lil Knight',
        	'slug_name' => 'Lil-K-night',
        	'image' => 'fileupload/image/Fri-06-2017-55-21-03.jpg',
        	]);
    }
}
