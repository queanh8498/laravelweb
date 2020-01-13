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
<<<<<<< HEAD
        //tạo role
        $role = Role::create(['name' => 'quan_tri']);
        //tạo quyền
=======
        //tao role (vai trò)
        $role = Role::create(['name' => 'quan_tri']);

        //tao quyen
>>>>>>> 323786607dc8b692a3f1180fdef80f65aead5f9b
        $permission_xem_sp = Permission::create(['name' => 'xem_sp']);
        $permission_sua_sp = Permission::create(['name' => 'sua_sp']);
        $permission_xoa_sp = Permission::create(['name' => 'xoa_sp']);
        $permission_xuat_excel_sp = Permission::create(['name' => 'xuat_excel_sp']);
<<<<<<< HEAD

        //cấp quyền cho role đã tạo
        //$role->givePermissionTo($permission_xem_sp);
        //$permission->assignRole($role);
=======
>>>>>>> 323786607dc8b692a3f1180fdef80f65aead5f9b
    }
}
