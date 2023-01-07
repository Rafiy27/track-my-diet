<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            [
                "name" => "Spaghetti Carbonara",
                "category" => "Meals",
                "description" => "A simple meals so delicious",
                "ingredient" => "Spaghetti, Parmesan, Egg, Pecorino Cheese, Garlic, Unsalted Butter, Sea Salt, Black Pepper",
                "instruction" => "Boil a large saucepan of water, then add 1 tsp salt and 350g spaghetti. Cook until al dente.
                Finely chop 100g pancetta, then fry in 50g unsalted butter with 2 crushed garlic cloves until golden. Discard the garlic.
                In a bowl, beat 3 large eggs and mix with 50g grated pecorino cheese and 50g grated parmesan.
                When the spaghetti is done, add it to the frying pan with the pancetta and mix in the egg and cheese mixture.
                If the dish is dry, add a few tablespoons of the pasta cooking water. Season with salt and pepper as needed.
                Serve the spaghetti carbonara immediately, sprinkling with the remaining cheese and black pepper.",
                "calories" => 574.00,
                "carbs" => 65.70,
                "fat" => 27.00,
                "protein" => 24.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);

        DB::table('foods')->insert([
            [
                "name" => "Chicken Shawarma",
                "category" => "Meals",
                "description" => "A simple meals so delicious",
                "ingredient" => "Olive Oil, Chicken, Lemon, Garlic, Coriander, Cumin, Cardamom, Paprika, Cayenne, Salt, Pepper, Yogurt Sauce, Marinade",
                "instruction" => "Mix marinade in a ziplock bag or container, then add chicken and marinate in the fridge for at least 3 hours or up to 24 hours.
                Make yogurt sauce by mixing ingredients and setting aside for 20 minutes.
                Cook chicken on the stove or BBQ until it has a crust and is fully cooked.
                Rest chicken for at least 3 minutes before slicing or serving whole.
                Serve as wraps with tomato, lettuce, onion, and yogurt sauce, or as a Shawarma plate with rice, salads, and flatbread. Optional extras include hummus, cheese, and hot sauce.",
                "calories" => 45.70,
                "carbs" => 3.00,
                "fat" => 10.60,
                "protein" => 32.30,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
