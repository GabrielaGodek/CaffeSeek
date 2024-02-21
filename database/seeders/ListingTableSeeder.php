<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;
use Illuminate\Support\Facades\File;

class ListingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('storage/json/coffeedata.json');
        $data = json_decode($json, true);
        foreach ($data as $obj) {
            Listing::updateOrCreate(['id' => $obj['id'],
                'title' => $obj['title'],
                'description' => $obj['description'],
                'ingredients' => $obj['ingredients'],
                'proportions' => $obj['proportions'],
                'image' => $obj['image'],
            ]);
        };
       
    }
}
