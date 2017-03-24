<?php

use App\User;
use App\Models\Permissions;
use App\Models\PermissionRoles;
use App\Models\Roles;
use App\Models\UserRoles;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

/*
|--------------------------------------------------------------------------
| Users Seeder
|--------------------------------------------------------------------------
|
| This is a global user related data seeder.
|
*/

class UsersSeeder extends Seeder
{
     /**
     * Initial roles values. These values are used in test dB seeding
     * as well as initial production deployment.
     *
     * @var array
     */
    protected $initRoles        = array(
                        array(
                            'name'  => 'admin',
                            'label' => 'Admin'
                            ),
                        array(
                            'name'  => 'user',
                            'label' => 'User'
                            ),
                    );


    /**
     * Initial permissions values. These values are used in test dB seeding
     * as well as initial production deployment.
     *
     * @var array
     */
    protected $initPermissions  = array(
                        array(
                            'name'  => 'canListUsers',
                            'label' => 'List users',
                            'role'  => array('admin')
                            ),
                        array(
                            'name'  => 'canManageUsers',
                            'label' => 'Manage users',
                            'role'  => array('admin')
                            ),
                        array(
                            'name'  => 'canManageOwnProfile',
                            'label' => 'Manage own user profile',
                            'role'  => array('admin','user')
                            ),
                        array(
                            'name'  => 'canListPermissions',
                            'label' => 'List Permissions',
                            'role'  => array('admin')
                            ),
                        array(
                            'name'  => 'canManagePermissions',
                            'label' => 'Manage Permissions',
                            'role'  => array('admin')
                            ),
                        array(
                            'name'  => 'canListRoles',
                            'label' => 'List Roles',
                            'role'  => array('admin')
                            ),
                        array(
                            'name'  => 'canManageRoles',
                            'label' => 'Manage Roles',
                            'role'  => array('admin')
                            ),
                        array(
                            'name'  => 'canListRequests',
                            'label' => 'List requests',
                            'role'  => array('admin')
                            ),
                        array(
                            'name'  => 'canManageRequests',
                            'label' => 'Manage requests',
                            'role'  => array('admin')
                            ),
                        array(
                            'name'  => 'canListOwnRequests',
                            'label' => 'List own requests',
                            'role'  => array('admin','user')
                            ),
                        array(
                            'name'  => 'canManageOwnRequests',
                            'label' => 'Manage own requests',
                            'role'  => array('admin','user')
                            ),
                    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create initial roles
        foreach ($this->initRoles as $role) {
            Roles::create($role);
        }

        // Create initial permissions and associate with roles
        foreach ($this->initPermissions as $permission) {
            $permissionEntry = Permissions::create([
                        'name'      => $permission['name'],
                        'label'     => $permission['label'],
                    ]);

            // Apply permissions to rolles
            foreach ($permission['role'] as $permisionRole) {
                // Add dB entry
                PermissionRoles::create([
                    'permission_id' => $permissionEntry->id,
                    'role_id'       => Roles::where('name', $permisionRole)->first()->id,
                ]);
            }

        }

        // Create admin user and associate admin role
        $users = factory(User::class, 1)
            ->create(
                [
                    'name'      => 'admin',
                    'email'     => 'admin@this-system-email.internal',
                    'password'  => bcrypt('password'),
                ]);

        UserRoles::create([
                'user_id'   => $users->first()->id,
                'role_id'   => Roles::where('name', 'admin')->first()->id,
            ]);


        // Create random users and associate user role
        $users = factory(User::class, rand(5, 15))
            ->create(
                [
                    'password'  => bcrypt('password'),
                ]);

            foreach ($users as $user) {
                UserRoles::create([
                    'user_id'   => $user->id,
                    'role_id'   => Roles::where('name', 'user')->first()->id,
                ]);
            }

    }
}
