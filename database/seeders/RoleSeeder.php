<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Role();
        $admin->name = 'Admin';
        $admin->slug = 'Admin';
        $admin->save();
        
        $manager = new Role();
        $manager->name = 'Manager';
        $manager->slug = 'Manager';
        $manager->save();
    }
}
