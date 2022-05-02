<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = ['id'=>1,'name'=>'admin','email'=>'admin@gmail.com','password'=>'12345678','image'=>'','phone'=>9205025418];
        Admin::insert($adminRecords);
    }
}
