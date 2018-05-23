<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            ['id'=>1,'designer_id'=>'1','public_time'=>'2018-05-22 17:28','content'=>'刚刚画的~大家看看怎么样','img_url'=>json_encode(array(getenv('APP_PATH').'/storage/post/1.png'),JSON_UNESCAPED_UNICODE),'like_num'=>'50','unlike_num'=>'2',],
            ['id'=>2,'designer_id'=>'2','public_time'=>'2018-05-20 17:28','content'=>'刚做完的作业','img_url'=>json_encode(array(getenv('APP_PATH').'/storage/post/2.png',getenv('APP_PATH').'/storage/post/3.png',getenv('APP_PATH').'/storage/post/4.png'),JSON_UNESCAPED_UNICODE),'like_num'=>'66','unlike_num'=>'8',]
            ]);
    }
}
