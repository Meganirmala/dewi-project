<?php

namespace Database\Seeders;

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
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'article-list',
            'article-create',
            'article-edit',
            'article-delete',
            'gallery-list',
            'gallery-create',
            'gallery-edit',
            'gallery-delete',
            'fasilitas-list',
            'fasilitas-create',
            'fasilitas-edit',
            'fasilitas-delete',
            'profile-list',
            'profile-create',
            'profile-edit',
            'profile-delete',
            'contact-list',
            'contact-create',
            'contact-edit',
            'contact-delete',
            'kategori-list',
            'kategori-create',
            'kategori-edit',
            'kategori-delete',
         ];
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
       }
    }
}
