<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tạo role
        $role = Role::create(['name' => 'quan_tri']);
        //tạo quyền
        $permission_xem_sp = Permission::create(['name' => 'xem_sp']);
        $permission_sua_sp = Permission::create(['name' => 'sua_sp']);
        $permission_xoa_sp = Permission::create(['name' => 'xoa_sp']);
        $permission_xuat_excel_sp = Permission::create(['name' => 'xuat_excel_sp']);

        //cấp quyền cho role đã tạo
        //$role->givePermissionTo($permission_xem_sp);
        //$permission->assignRole($role);
    }
}
