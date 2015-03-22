<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(
            [
                'name' => 'admin', 
                'email' => 'admin@localhost.com', 
                'password' => Crypt::encrypt('1234')
            ]
        );
        User::create(
            [
                'name' => 'user', 
                'email' => 'user@localhost.com', 
                'password' => Crypt::encrypt('1234')
            ]
        );

        Role::create(
            [
                'name' => 'administrator', 
                'display_name' => 'Administrator', 
                'description' => 'Administrator of the platform'
            ]
        );
        Role::create(
            [
                'name' => 'user', 
                'display_name' => 'User', 
                'description' => 'User of the platform'
            ]
        );

        Permission::create(
            [
                'name' => 'administration', 
                'display_name' => 'Administration', 
                'description' => 'Administration of the platform'
            ]
        );
        Permission::create(
            [
                'name' => 'user', 
                'display_name' => 'User', 
                'description' => 'Use of the platform with no administrative rights'
            ]
        );

        // Get Roles
        $adminRole = Role::whereName('administrator')->first();
        $userRole = Role::whereName('user')->first();

        // Get Permissions
        $administrationPermission = Permission::whereName('administration')->first();
        $userPermission = Permission::whereName('user')->first();

        // Attach Permissions to roles
        $adminRole->attachPermission($administrationPermission);
        $userRole->attachPermission($userPermission);

        // Get Users
        $admin = User::whereName('admin')->first();
        $user = User::whereName('user')->first();

        // Attach Roles to Users
        $admin->attachRole($adminRole);
        $user->attachRole($userRole);
    }
}
