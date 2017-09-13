<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments') ->insert([
        	'content' => ' Hay quá anh ơi <3  ',
        	'user_id' => '1' ,
        	'file_id' => '5' ,
        	]);
        DB::table('comments') ->insert([
        	'content' => '  Nghe thư giãn quá ',
        	'user_id' => '1' ,
        	'file_id' => '6' ,
        	]);
        DB::table('comments') ->insert([
        	'content' => ' Có ai nghe mãi không chán như tôi k :(',
        	'user_id' => '1' ,
        	'file_id' => '7' ,
        	]);
        DB::table('comments') ->insert([
        	'content' => ' Nghiện mất rồi :* ',
        	'user_id' => '1' ,
        	'file_id' => '8' ,
        	]);
        DB::table('comments') ->insert([
        	'content' => ' Bài này của ai sáng tác vậy mọi người  ',
        	'user_id' => '1' ,
        	'file_id' => '9' ,
        	]);
        DB::table('comments') ->insert([
        	'content' => ' Sky ơi say oh yeahhh ',
        	'user_id' => '1' ,
        	'file_id' => '1' ,
        	]);
        DB::table('comments') ->insert([
        	'content' => ' Hay lắm anh ạ  ',
        	'user_id' => '1' ,
        	'file_id' => '2' ,
        	]);
        DB::table('comments') ->insert([
        	'content' => ' Qúa hay   ',
        	'user_id' => '1' ,
        	'file_id' => '3' ,
        	]);
    }
}
