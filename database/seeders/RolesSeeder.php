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
        Role::updateOrCreate(['role' => 'User']);
        Role::updateOrCreate(['role' => 'Staff']);
        Role::updateOrCreate(['role' => 'Supervisor']);
        Role::updateOrCreate(['role' => 'Admin']);
    }
}