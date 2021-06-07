<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'sample01@test.com',
        ];
        DB::table('contact')->insert($param);
        $param = [
            'name' => 'jiro',
            'email' => 'sample02@test.com',
        ];
        DB::table('contact')->insert($param);
    }
}
