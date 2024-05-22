<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $get_all_users = new Permission();
        $get_all_users->name = 'get_all_users';
        $get_all_users->slug = 'get_all_users';
        $get_all_users->save();

        $get_all_data = new Permission();
        $get_all_data->name = 'get_all_data';
        $get_all_data->slug = 'get_all_data';
        $get_all_data->save();
    }
}
