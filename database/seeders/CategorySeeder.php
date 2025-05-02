<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $categories = ['Shoes', 'Electronics', 'Books', 'Clothing', 'Accessories', 'Home Appliances', 'Sports Equipment', 'Toys', 'Beauty Products', 'Furniture'];
        foreach ($categories as $name) {
            Category::factory()->withName($name)->create();
        }
    }
}
