<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Listing::create([
            'title' => 'Black Coffee',
            'description' => 'Black coffee is as simple as it gets, with ground coffee beans steeped in hot water, served hot. And if you want to sound fancy, you can call black coffee by its proper name=> café noir.',
            'ingredients' => 'Espresso',
            'proportions' => '1 part espresso to 1 part hot water',
            'image' => 'https://images.unsplash.com/photo-1494314671902-399b18174975?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
        Listing::create([
            'title' => 'Black Coffee',
            'description' => 'Black coffee is as simple as it gets, with ground coffee beans steeped in hot water, served hot. And if you want to sound fancy, you can call black coffee by its proper name=> café noir.',
            'ingredients' => 'Hot water',
            'proportions' => '1 part espresso to 1 part hot water',
            'image' => 'https://images.unsplash.com/photo-1494314671902-399b18174975?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
        Listing::create([
            'title' => 'Black Coffee',
            'description' => 'Black coffee is as simple as it gets, with ground coffee beans steeped in hot water, served hot. And if you want to sound fancy, you can call black coffee by its proper name=> café noir.',
            'ingredients' => 'Espresso, Hot water',
            'proportions' => '1 part espresso to 1 part hot water',
            'image' => 'https://images.unsplash.com/photo-1494314671902-399b18174975?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);


        \App\Models\User::factory(10)->create();
    }
}
