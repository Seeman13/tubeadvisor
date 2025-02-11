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
        $this->call(CategorySeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(ChannelSeeder::class);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@mail.su',
        ]);
    }
}
