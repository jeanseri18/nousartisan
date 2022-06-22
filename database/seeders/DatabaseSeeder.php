<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                "name"=> "customer",
                "description"=> "Clients"
            ],
            [
                "name"=> "worker",
                "description"=> "Prestataires"
            ]
        ];

        foreach ($data as $key => $item) {
          $role = new UserRole();
          $role->name = $item['name'];
          $role->description = $item['description'];
          $role->save();
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
