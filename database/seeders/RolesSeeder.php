<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Seed the roles table.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate(['name' => 'User']);
        Role::updateOrCreate(['name' => 'Staff']);
        Role::updateOrCreate(['name' => 'Supervisor']);
        Role::updateOrCreate(['name' => 'Admin']);
    }
}