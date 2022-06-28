<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'entry']);

        User::create(['name' => 'Admin', 'email' => 'admin@topgear.test','password' => 'password','is_admin' => '1'])
            ->assignRole('admin');
        User::create(['name' => 'Admin', 'email' => 'entry@topgear.test','password' => 'password','is_admin' => '0'])
            ->assignRole('entry');
    }
}
