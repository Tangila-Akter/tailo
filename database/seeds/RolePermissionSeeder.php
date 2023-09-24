<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Class RolePermissionSeeder.
 *
 * @see https://spatie.be/docs/laravel-permission/v5/basic-usage/multiple-guards
 *
 * @package App\Database\Seeds
 */
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Enable these options if you need same role and other permission for User Model
         * Else, please follow the below steps for admin guard
         */

        // Create Roles and Permissions
        // $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        // $roleAdmin = Role::create(['name' => 'admin']);
        // $roleEditor = Role::create(['name' => 'editor']);
        // $roleUser = Role::create(['name' => 'user']);


        // Permission List as array
        $permissions = [

            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],
            [
                'group_name' => 'user',
                'permissions' => [
                    // Blog Permissions
                    'user.create',
                    'user.view',
                    'user.edit',
                    'user.delete',
                ]
            ],
            [
                'group_name' => 'order',
                'permissions' => [
                    // Order Permissions
                    'order.create',
                    'order.view',
                    'order.edit',
                    'order.delete',
                ]
            ],
            [
                'group_name' => 'account',
                'permissions' => [
                    // account Permissions
                    'account.create',
                    'account.view',
                    'account.edit',
                    'account.delete',
                ]
            ],
            [
                'group_name' => 'sms',
                'permissions' => [
                    // sms Permissions
                    'sms.create',
                    'sms.view',
                    'sms.edit',
                    'sms.delete',
                ]
            ],
            [
                'group_name' => 'stuff',
                'permissions' => [
                    // stuff Permissions
                    'stuff.create',
                    'stuff.view',
                    'stuff.edit',
                    'stuff.delete',
                ]
            ],
            [
                'group_name' => 'setting',
                'permissions' => [
                    // setting Permissions
                    'setting.create',
                    'setting.view',
                    'setting.edit',
                    'setting.delete',
                ]
            ],
            [
                'group_name' => 'upper_pocket',
                'permissions' => [
                    // upper_pocket Permissions
                    'upper_pocket.create',
                    'upper_pocket.view',
                    'upper_pocket.edit',
                    'upper_pocket.delete',
                ]
            ],
            [
                'group_name' => 'collar',
                'permissions' => [
                    // collar Permissions
                    'collar.create',
                    'collar.view',
                    'collar.edit',
                    'collar.delete',
                ]
            ],
            [
                'group_name' => 'gola',
                'permissions' => [
                    // gola Permissions
                    'gola.create',
                    'gola.view',
                    'gola.edit',
                    'gola.delete',
                ]
            ],
            [
                'group_name' => 'plate',
                'permissions' => [
                    // plate Permissions
                    'plate.create',
                    'plate.view',
                    'plate.edit',
                    'plate.delete',
                ]
            ],
            [
                'group_name' => 'pasting',
                'permissions' => [
                    // pasting Permissions
                    'pasting.create',
                    'pasting.view',
                    'pasting.edit',
                    'pasting.delete',
                ]
            ],
            [
                'group_name' => 'lace',
                'permissions' => [
                    // lace Permissions
                    'lace.create',
                    'lace.view',
                    'lace.edit',
                    'lace.delete',
                ]
            ],
            [
                'group_name' => 'ful',
                'permissions' => [
                    // ful Permissions
                    'ful.create',
                    'ful.view',
                    'ful.edit',
                    'ful.delete',
                ]
            ],
            [
                'group_name' => 'button',
                'permissions' => [
                    // button Permissions
                    'button.create',
                    'button.view',
                    'button.edit',
                    'button.delete',
                ]
            ],
            [
                'group_name' => 'lower_pocket',
                'permissions' => [
                    // lower_pocket Permissions
                    'lower_pocket.create',
                    'lower_pocket.view',
                    'lower_pocket.edit',
                    'lower_pocket.delete',
                ]
            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    // admin Permissions
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    // role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    // profile Permissions
                    'profile.view',
                    'profile.edit',
                ]
            ],
        ];


        // Create and Assign Permissions
        // for ($i = 0; $i < count($permissions); $i++) {
        //     $permissionGroup = $permissions[$i]['group_name'];
        //     for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
        //         // Create Permission
        //         $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
        //         $roleSuperAdmin->givePermissionTo($permission);
        //         $permission->assignRole($roleSuperAdmin);
        //     }
        // }

        // Do same for the admin guard for tutorial purposes
        $roleSuperAdmin = Role::create(['name' => 'superadmin', 'guard_name' => 'admin']);

        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup, 'guard_name' => 'admin']);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }

        // Assign super admin role permission to superadmin user
        $admin = Admin::where('username', 'superadmin')->first();
        if ($admin) {
            $admin->assignRole($roleSuperAdmin);
        }
    }
}
