<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if roles already exist
        $existingRoles = Role::whereIn('type', ['user', 'admin'])->count();

        if($existingRoles === 0) {
            // Insert roles only if they don't already exist
            Role::create(['type' => 'user']);
            Role::create(['type' => 'admin']);
        }

    }
}
