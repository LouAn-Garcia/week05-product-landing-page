<?php

namespace Database\Seeders;

use App\Models\CatProfile;
use App\Models\MenuItem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(['name' => 'Neko Wave Host', 'email' => 'host@nekowavecafe.test']);

        CatProfile::query()->upsert([
            ['name' => 'Aegon', 'slug' => 'aegon', 'breed' => 'Neko Wave resident', 'age' => null, 'personality' => 'Curry companion', 'favorite_treat' => 'Japanese curry day', 'bio' => 'Aegon is one of the familiar faces behind Neko Wave’s cozy Japanese-curry moments.', 'accent_color' => 'rose', 'is_featured' => true, 'sort_order' => 1],
            ['name' => 'Potchi', 'slug' => 'potchi', 'breed' => 'Neko Wave resident', 'age' => null, 'personality' => 'Cheese fries fan', 'favorite_treat' => 'Sharing cheese fries', 'bio' => 'Potchi brings a little extra heart to the table, especially when there are cheese fries to share.', 'accent_color' => 'amber', 'is_featured' => true, 'sort_order' => 2],
            ['name' => 'Toru', 'slug' => 'toru', 'breed' => 'Neko Wave resident', 'age' => null, 'personality' => 'Silog sweetheart', 'favorite_treat' => 'Tapsilog time', 'bio' => 'Toru is the friendly face for a satisfying silog plate and a slow cafe catch-up.', 'accent_color' => 'sky', 'is_featured' => true, 'sort_order' => 3],
            ['name' => 'Julie', 'slug' => 'julie', 'breed' => 'Neko Wave resident', 'age' => null, 'personality' => 'Onigiri admirer', 'favorite_treat' => 'Tuna onigiri', 'bio' => 'Julie’s Neko Wave story comes with a bright tuna-onigiri moment and a whole lot of heart.', 'accent_color' => 'violet', 'is_featured' => true, 'sort_order' => 4],
            ['name' => 'Motchi', 'slug' => 'motchi', 'breed' => 'Neko Wave resident', 'age' => null, 'personality' => 'Coffee first', 'favorite_treat' => 'Pink iced latte', 'bio' => 'Motchi understands the Neko Wave rule: coffee first, then feelings later.', 'accent_color' => 'rose', 'is_featured' => true, 'sort_order' => 5],
            ['name' => 'Jack', 'slug' => 'jack', 'breed' => 'Neko Wave resident', 'age' => null, 'personality' => 'Heart-day charmer', 'favorite_treat' => 'Flower-day naps', 'bio' => 'Jack is always ready to deliver a cheerful Neko Wave hello, preferably with flowers nearby.', 'accent_color' => 'amber', 'is_featured' => true, 'sort_order' => 6],
        ], ['slug'], ['name', 'breed', 'age', 'personality', 'favorite_treat', 'bio', 'accent_color', 'is_featured', 'sort_order']);

        MenuItem::query()->upsert([
            ['name' => "Motchi's Pink Iced Latte", 'category' => 'Coffee & Tea', 'description' => 'A creamy iced latte with a playful pink finish.', 'price' => 150, 'dietary_label' => 'House favorite', 'is_featured' => true, 'sort_order' => 1],
            ['name' => "Aegon's Japanese Curry", 'category' => 'Cafe Favourites', 'description' => 'Comforting Japanese-style curry served with rice.', 'price' => 220, 'dietary_label' => 'Cafe favourite', 'is_featured' => true, 'sort_order' => 1],
            ['name' => "Potchi's Cheese Fries", 'category' => 'Cafe Favourites', 'description' => 'Golden fries with a generous cheesy topping for sharing.', 'price' => 130, 'dietary_label' => 'Shareable', 'is_featured' => true, 'sort_order' => 2],
            ['name' => "Toru's Tapsilog", 'category' => 'Cafe Favourites', 'description' => 'A hearty tapsilog plate with rice, egg, and cucumber.', 'price' => 210, 'dietary_label' => 'All-day meal', 'is_featured' => false, 'sort_order' => 3],
            ['name' => "Julie's Tuna Onigiri", 'category' => 'Japanese Bites', 'description' => 'A simple, satisfying tuna onigiri for a light cafe bite.', 'price' => 95, 'dietary_label' => 'Japanese-inspired', 'is_featured' => false, 'sort_order' => 1],
            ['name' => "Jack's Heart Day Treat", 'category' => 'Japanese Bites', 'description' => 'A sweet seasonal treat made for sharing a little love.', 'price' => 120, 'dietary_label' => 'Seasonal', 'is_featured' => false, 'sort_order' => 2],
        ], ['name'], ['category', 'description', 'price', 'dietary_label', 'is_featured', 'sort_order']);
    }
}
