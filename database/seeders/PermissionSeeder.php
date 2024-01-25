<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name' => 'admin']
        );
        $role_petugas = Role::updateOrCreate(
            [
                'name' => 'petugas'
            ],
            ['name' => 'petugas']
        );
        $user = User::find(1);
        $user->assignRole('admin');

        $user2 = User::find(2);
        $user2->assignRole('petugas');
    }
}