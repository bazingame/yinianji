<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkAssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_assessment')->insert([
            ['id'=>1,'work_id' => '1','user_id'=>'1','content'=>'good job!','time'=>date('Y-m-d H:i:s')],
            ['id'=>2,'work_id' => '1','user_id'=>'2','content'=>'good job!','time'=>date('Y-m-d H:i:s')],
            ['id'=>3,'work_id' => '2','user_id'=>'2','content'=>'good job!','time'=>date('Y-m-d H:i:s')],
            ['id'=>4,'work_id' => '2','user_id'=>'2','content'=>'good job!','time'=>date('Y-m-d H:i:s')],
            ['id'=>5,'work_id' => '2','user_id'=>'1','content'=>'good job!','time'=>date('Y-m-d H:i:s')],
            ['id'=>6,'work_id' => '3','user_id'=>'1','content'=>'good job!','time'=>date('Y-m-d H:i:s')],
        ]);
    }
}
