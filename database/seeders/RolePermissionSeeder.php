<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage statistics',
            'manage product',
            'manage principles',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission
            ]);
        }

        $designManagerRole = Role::firstOrCreate([
            'name' => 'designer_manager'
        ]);
        $designManagerPermissions = [
            'manage product',
            'manage principles',
            'manage testimonials'
        ];
        $designManagerRole->syncPermissions($designManagerPermissions);

        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        $user = User::create([
            'name' => 'Rafli',
            'email' => 'afysaid@gmail.com',
            'password' => bcrypt('rafli777*')
        ]);

        $user->assignRole($superAdminRole);
    }
}
