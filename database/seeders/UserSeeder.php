<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = Role::where('slug', 'Admin')->first();
        $get_all_data = Permission::where('slug', 'get_all_data')->first();

        $user1 = new User();
        $user1->name = 'Test1';
        $user1->email = 'test1@gmail.com';
        $user1->password = bcrypt('secret');
        $user1->phone = ('+79230810391');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($get_all_data);
    }
}
