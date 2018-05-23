<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            ['username'=>'howard','sex'=>'男','email'=>'howard@gmail.com','phone'=>'18977777777','qq'=>'1020202020','birthday'=>'2000-02-03','introduction'=>'寻求高质量设计师','password'=>app('hash')->make('secret')],
            ['username'=>'草图君','sex'=>'女','email'=>'pic@gmail.com','phone'=>'18977777777','qq'=>'1020202020','birthday'=>'2000-02-03','introduction'=>'高薪招标','password'=>app('hash')->make('secret')],
        ]);
    }
}

