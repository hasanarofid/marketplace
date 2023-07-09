<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'Admin',
                'email'=>'admin@marketplace.com',
                'password'=>Hash::make('admin'),
                'role'=>'Admin'
            ],
            [
                'id'=>2,
                'name'=>'Hasan',
                'email'=>'hasanarofid@gmail.com',
                'password'=>Hash::make('hasan123'),
                'role'=>'Customer'
            ],
            [
                'id'=>3,
                'name'=>'Reny',
                'email'=>'reny@gmail.com',
                'password'=>Hash::make('reny123'),
                'role'=>'Customer'
            ],
            [
                'id'=>4,
                'name'=>'Barra',
                'email'=>'barra@gmail.com',
                'password'=>Hash::make('barra123'),
                'role'=>'Customer'
            ],
        ]);
    }
}