<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'create_test',
            'edit_test',
            'delete_test',
            'view_test',
            'purchase_test',
            'assign_test',
            'take_test',
            'view_reports',
            'manage_users',
        ];

        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::findOrCreate($permission);
        }

        // create roles and assign created permissions

        // Student
        $role = \Spatie\Permission\Models\Role::findOrCreate('student');
        $role->givePermissionTo(['take_test', 'view_reports']);

        // Counsellor
        $role = \Spatie\Permission\Models\Role::findOrCreate('counsellor');
        $role->givePermissionTo(['purchase_test', 'assign_test', 'view_reports']);

        // Professional
        $role = \Spatie\Permission\Models\Role::findOrCreate('professional');
        $role->givePermissionTo(['purchase_test', 'take_test', 'view_reports']);

        // Institute
        $role = \Spatie\Permission\Models\Role::findOrCreate('institute');
        $role->givePermissionTo(['purchase_test', 'assign_test', 'view_reports']);

        // Admin
        $role = \Spatie\Permission\Models\Role::findOrCreate('admin');
        $role->givePermissionTo(\Spatie\Permission\Models\Permission::all());

        // Create Admin User
        $user = \App\Models\User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );
        $user->assignRole('admin');
    }
}
