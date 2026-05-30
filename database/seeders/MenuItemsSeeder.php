<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuItems = collect([
            [
                'category_id' => '3',
                'item_name' => 'Cheese Burger',
                'discription' => 'Hand-crafted prime beef patty, layered with aged sharp cheddar, caramelized onions, crisp butter lettuce, and a smear of garlic aioli on a freshly baked brioche bun.',
                'price' => '249',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTthMItWzAAXDjKOuUNiN3b1me3pSweyIx7fA&s',
            ],
            [
                'category_id' => '3',
                'item_name' => 'Pizza Hut Italian',
                'discription' => ' Fusilli pasta baked in a rich, tangy arrabbiata sauce with red bell peppers, onions, and capsicum, all topped with a gooey, melted cheese layer',
                'price' => '399',
                'image' => 'https://img.magnific.com/free-psd/top-view-delicious-pizza_23-2151868964.jpg?semt=ais_hybrid&w=740&q=80',
            ],
            [
                'category_id' => '6',
                'item_name' => 'Lobster',
                'discription' => 'Tender lobster tail broiled with a zesty garlic, herb, and white wine butter. Light, elegant, and packed with flavor.',
                'price' => '1399',
                'image' => 'https://static.vecteezy.com/system/resources/previews/052/644/653/non_2x/delicious-buttered-lobster-platter-for-gourmet-dining-on-transparent-background-png.png',
            ],
        ]);

        $menuItems->each(function($item){
            MenuItem::create($item);
        });
    }
}
