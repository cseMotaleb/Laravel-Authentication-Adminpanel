<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'admin-list',
           'admin-create',
           'admin-edit',
           'admin-delete',
           'manager-list',
           'manager-create',
           'manager-edit',
           'manager-delete',
           'customer-list',
           'customer-create',
           'customer-edit',
           'customer-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'vendor-list',
           'vendor-create',
           'vendor-edit',
           'vendor-delete',
           'staff-list',
           'staff-create',
           'staff-edit',
           'staff-delete',
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'permission-list',
           'permission-create',
           'permission-edit',
           'permission-delete',
           'dashboard-list',
           'dashboard-create',
           'dashboard-edit',
           'dashboard-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           'order-list',
           'order-create',
           'order-edit',
           'order-delete',
           'blog-list',
           'blog-create',
           'blog-edit',
           'blog-delete',
        ];
   
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
