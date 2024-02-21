<?php

namespace Database\Seeders;

use App\Models\User;
// use Database\Seeders\ListingTable;

use Illuminate\Database\Seeder;
use Database\Seeders\ListingTableSeeder;
use TimoKoerber\LaravelJsonSeeder\JsonDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ListingTableSeeder::class);
        $user = User::factory()->create([
            'name'=>'John',
            'email'=>'john@doe.com'
        ]);

    }
}
