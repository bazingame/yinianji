<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->insert([
            ['id'=>1,'name' => '平面设计'],
            ['id'=>2,'name' => '室内设计'],
            ['id'=>3,'name' => 'VI设计'],
            ['id'=>4,'name' => 'UI设计'],
            ['id'=>5,'name' => '产品设计'],
            ['id'=>6,'name' => '服装设计'],
            ['id'=>7,'name' => 'LOGO设计'],
            ['id'=>8,'name' => '广告设计'],
            ['id'=>9,'name' => '宣传策划'],
            ['id'=>10,'name' => '包装设计'],
            ['id'=>11,'name' => '视频制作'],
            ['id'=>12,'name' => '摄影'],
            ['id'=>13,'name' => '游戏设计'],
            ['id'=>14,'name' => '动画设计'],
            ['id'=>15,'name' => '3D效果图'],
            ['id'=>16,'name' => '漫画'],
            ['id'=>17,'name' => '油画'],
            ['id'=>18,'name' => '手绘插画'],
        ]);
    }
}
