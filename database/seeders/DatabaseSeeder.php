<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Database\Seeders\ListingTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ListingTableSeeder::class);
        $user = User::factory()->create([
            'name'=>'John',
            'email'=>'john@doe.com'
        ]);

    }
}
