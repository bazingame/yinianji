<?php

use Illuminate\Database\Seeder;

class DemandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demand')->insert([
            ['id'=>'1','name'=>'依然浚|电视剧提名','description'=>'','money'=>'1000','status'=>'招募中','public_time'=>'2018-05-23','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'2','name'=>'悉尼风光美如画','description'=>'','money'=>'500','status'=>'招募中','public_time'=>'2018-05-09','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'3','name'=>'马自达','description'=>'','money'=>'200','status'=>'制作中','public_time'=>'2018-02-09','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'4','name'=>'扬子江','description'=>'','money'=>'1000','status'=>'制作中','public_time'=>'2018-04-14','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'5','name'=>'素年锦时','description'=>'','money'=>'400','status'=>'制作中','public_time'=>'2018-01-22','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'6','name'=>'何以解忧唯有暴富','description'=>'12','money'=>'520','status'=>'制作中','public_time'=>'2018-05-09','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'7','name'=>'自由之战','description'=>'','money'=>'200','status'=>'已完成','public_time'=>'2018-03-05','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'8','name'=>'兰博基尼','description'=>'','money'=>'300','status'=>'已完成','public_time'=>'2018-04-02','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'9','name'=>'陪伴这小事','description'=>'','money'=>'400','status'=>'已完成','public_time'=>'2018-05-02','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'10','name'=>'唯独这款SEIKO买不到','description'=>'','money'=>'100','status'=>'已完成','public_time'=>'2018-01-02','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
            ['id'=>'11','name'=>'硫磺工人','description'=>'','money'=>'400','status'=>'已完成','public_time'=>'2018-02-03','time'=>'5','service'=>'平面设计','service_id'=>'1','service_detail'=>'海报设计','service_detail_id'=>'1'],
        ]);
    }
}
