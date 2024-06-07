<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'ADMIN',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'Test 01',
                'email'=>'test01@gmail.com',
                'password'=>Hash::make('abcd1234'),
                'role'=>'user',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
