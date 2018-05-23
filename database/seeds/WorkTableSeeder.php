<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work')->insert([
             ['id'=>'1','designer_id'=>'2','name'=>'依然浚|电视剧提名','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/1.png'),JSON_UNESCAPED_UNICODE),'views'=>'224','description'=>'','like'=>'21','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'2','designer_id'=>'1','name'=>'悉尼风光美如画','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/2.png',JSON_UNESCAPED_UNICODE),JSON_UNESCAPED_UNICODE),'views'=>'2','description'=>'','like'=>'23','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'3','designer_id'=>'1','name'=>'马自达','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/3.png'),JSON_UNESCAPED_UNICODE),'views'=>'45','description'=>'','like'=>'2','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'4','designer_id'=>'2','name'=>'扬子江','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/4.png'),JSON_UNESCAPED_UNICODE),'views'=>'57','description'=>'','like'=>'12','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'5','designer_id'=>'4','name'=>'素年锦时','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/5.png'),JSON_UNESCAPED_UNICODE),'views'=>'2','description'=>'','like'=>'3','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'6','designer_id'=>'5','name'=>'何以解忧唯有暴富','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/6.png'),JSON_UNESCAPED_UNICODE),'views'=>'42','description'=>'12','like'=>'22','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'7','designer_id'=>'2','name'=>'自由之战','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/7.png'),JSON_UNESCAPED_UNICODE),'views'=>'72','description'=>'','like'=>'21','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'8','designer_id'=>'4','name'=>'兰博基尼','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/8.png'),JSON_UNESCAPED_UNICODE),'views'=>'72','description'=>'','like'=>'3','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'9','designer_id'=>'12','name'=>'陪伴这小事','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/9.png'),JSON_UNESCAPED_UNICODE),'views'=>'875','description'=>'','like'=>'321','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'10','designer_id'=>'2','name'=>'唯独这款SEIKO买不到','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/10.png'),JSON_UNESCAPED_UNICODE),'views'=>'785','description'=>'','like'=>'12','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
             ['id'=>'11','designer_id'=>'7','name'=>'硫磺工人','images'=>json_encode(array(getenv('APP_PATH').'/storage/work/11.png'),JSON_UNESCAPED_UNICODE),'views'=>'98','description'=>'','like'=>'3213','demand_id'=>'2','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
        ]);
    }
}
