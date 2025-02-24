<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
<<<<<<< HEAD
            'company_id_number' => 'BFD-0001',
            'role_name' => 'Admin',
            'email' => 'test@example.com',
        ]);

        $this->call(
            [
                DepartmentSeeder::class,
                DesignationSeeder::class,
            ]
        );
=======
            'email' => 'test@example.com',
        ]);
>>>>>>> 1cc7961a0275a520ace0f4cb4b128714a70e7e6f
    }
}
