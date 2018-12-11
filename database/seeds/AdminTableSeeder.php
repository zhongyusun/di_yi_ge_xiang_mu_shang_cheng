<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //填充初始管理员
        \App\Models\Admin::firstOrNew([
            'username'=>'2460245313'
        ])->fill(['password'=>bcrypt('123456')])->save();
    }
}
