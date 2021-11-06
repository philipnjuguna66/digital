<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $suser = \App\Models\User::factory()->create([
            'email' => 'admin@philip.com',
            'password' => bcrypt('password')
        ]);

        Blog::factory(100)->create();
        Setting::factory(4)->create();

    }
}
