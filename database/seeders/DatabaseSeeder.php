<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Group::factory()->count(5)->create();
        User::factory()->count(10)->create();

        // create test admin
        if(App::environment('local')) {
            User::create([
                'name' => 'test',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
            ]);
        }
    }
}
