<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'email'=>'long@gmail.com',
    			'password'=>bcrypt('123456'),
    			'level'=>1
    		],
    		[
    			'email'=>'tinhanh473@gmail.com',
    			'password'=>bcrypt('123456'),
    			'level'=>1
    		]
    	];
    	DB::table('users')->insert($data);
    }
}

