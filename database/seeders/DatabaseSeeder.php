<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::factory()->create([
            'name' => 'Burger'
        ]);

        Category::factory()->create([
            'name' => 'Chicken'
        ]);
        Category::factory()->create([
            'name' => 'Spaghetti'
        ]);
      

        Product::factory()->create([
            'name' => 'Spaghetti',
            'image' => '',
            'price' => '50000',
            'description' => 'delicious',
            'category_id' => '1'
        ]);

        Product::factory()->create([
            'name' => 'Burger',
            'image' => '',
            'price' => '300000',
            'description' => 'delicious',
            'category_id' => '1'
        ]);
        Product::factory()->create([
            'name' => 'Chicken',
            'image' => '',
            'price' => '120000',
            'description' => 'delicious',
            'category_id' => '1'
        ]);
        Product::factory()->create([
            'name' => 'salad',
            'image' => '',
            'price' => '70000',
            'description' => 'delicious',
            'category_id' => '1'
        ]);


    }
}
