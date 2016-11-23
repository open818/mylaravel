<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '导航条',
            'desc' => '导航条',
        ],[
            'name' => 'Banner',
            'desc' => 'Banner',
        ]);

        DB::table('modules')->insert([
            'category_id'   => 1,
            'name' => '导航条(一)',
            'desc' => '导航条(一)',
        ]);

        DB::table('module_attr')->insert([
            'module_id'   => 1,
            'name' => 'logo图片',
            'desc' => 'logo图片',
            "type"  => 'file',
        ],[
            'module_id'   => 1,
            'name' => 'logo',
            'desc' => 'logo图片',
            "type"  => 'file',
        ]);
    }
}
