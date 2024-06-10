<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Sakti',
            'email' => 'skarluajitkas@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        Permission::create(['name' => 'finpen']);
        Permission::create(['name' => 'user manage']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('finpen');
        $roleAdmin->givePermissionTo('user manage');

        $roleUser = Role::findByName('Sakti');
        $roleUser->givePermissionTo('finpen');
    }
}
