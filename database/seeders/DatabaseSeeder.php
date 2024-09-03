<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed roles first
        $this->call(RolesSeeder::class);

        // Find the Admin role
        $adminRole = Role::where('name', 'Admin')->firstOrFail();

        // Create the default Admin user
        User::updateOrCreate(
            ['email' => 'mehediofficials28@gmail.com'], // Unique key to avoid duplicate users
            [
                'name' => 'Mehedi Hasan',
                'password' => bcrypt('password'), // Use a secure password
                'role_id' => $adminRole->id, // Assign the Admin role
            ]
        );
    }
}
