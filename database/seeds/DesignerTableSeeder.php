<?php

use Illuminate\Database\Seeder;

class DesignerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designer')->insert([
            ['username'=>'howard','sex'=>'男','email'=>'howard@gmail.com','phone'=>'18670999999','qq'=>'1004888888','birthday'=>'1998-05-28',
                'introduction'=>'会玩ps的小学生','location_privince'=>'湖南省','location_city'=>'湘潭市','location_area'=>'雨湖区','location_detail'=>'湘潭大学',
                'school_name'=>'湘潭大学','province_id'=>null,'password'=>app('hash')->make('secret'),'work_num'=>'7','fans_num'=>'63','head_img'=>getenv('APP_PATH').'/storage/HeadImg/1.png','tag'=>json_encode(array('平面设计师','UI设计师','插画师'),JSON_UNESCAPED_UNICODE),'assessment'=>'4.9'],
            ['username'=>'JhonFeng','sex'=>'男','email'=>'jhon@gmail.com','phone'=>'1333333333','qq'=>'52639874','birthday'=>'1995-04-18',
                'introduction'=>'专注于用户体验研究和UI视觉表现，就读于湖南工程学院，拥有丰富的接单经验。','location_privince'=>'湖南省','location_city'=>'湘潭市','location_area'=>'雨湖区','location_detail'=>'湘潭大学',
                'school_name'=>'湘潭大学','province_id'=>null,'password'=>app('hash')->make('secret'),'work_num'=>'4','fans_num'=>'25','head_img'=>getenv('APP_PATH').'/storage/HeadImg/1.png','tag'=>json_encode(array('UI设计师'),JSON_UNESCAPED_UNICODE),'assessment'=>'4.5'],
        ]);
    }
}




