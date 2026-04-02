<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TurfAdminModel;

class TurfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Don't duplicate if already seeded
        if (TurfAdminModel::count() > 0) {
            return;
        }

        $categories = ['football', 'cricket', 'badminton', 'swimming'];
        
        // Realistic addresses
        $locations = [
            ['division' => 'Dhaka', 'district' => 'Dhaka', 'address' => 'Banani, Road 11'],
            ['division' => 'Dhaka', 'district' => 'Dhaka', 'address' => 'Gulshan 2, Avenue 4'],
            ['division' => 'Dhaka', 'district' => 'Dhaka', 'address' => 'Uttara Sector 7'],
            ['division' => 'Dhaka', 'district' => 'Dhaka', 'address' => 'Mirpur DOHS'],
            ['division' => 'Dhaka', 'district' => 'Dhaka', 'address' => 'Bashundhara R/A'],
            ['division' => 'Dhaka', 'district' => 'Dhaka', 'address' => 'Dhanmondi 27'],
            ['division' => 'Chattogram', 'district' => 'Chattogram', 'address' => 'GEC More'],
            ['division' => 'Chattogram', 'district' => 'Chattogram', 'address' => 'Agrabad'],
            ['division' => 'Sylhet', 'district' => 'Sylhet', 'address' => 'Zindabazar'],
            ['division' => 'Rajshahi', 'district' => 'Rajshahi', 'address' => 'Shaheb Bazar'],
        ];

        // Sample turf names for variety
        $names = [
            'Pro Active', 'Kickoff', 'Striker', 'Goalpost', 'Champion',
            'Elite', 'PowerPlay', 'Ultimate', 'Metro', 'Green Field',
            'Alpha', 'United', 'Legend', 'Dream', 'Galaxy'
        ];

        for ($i = 1; $i <= 20; $i++) {
            $loc = $locations[array_rand($locations)];
            $cat = $categories[array_rand($categories)];
            $namePrefix = $names[array_rand($names)];

            TurfAdminModel::create([
                'turf_name' => "{$namePrefix} " . ucfirst($cat) . " Arena",
                'description' => "Welcome to {$namePrefix} Arena! We offer premium quality facilities for {$cat} enthusiasts. Fully lighted for night matches, safe environment, and top-tier amenities.",
                'category' => $cat,
                'division' => $loc['division'],
                'district' => $loc['district'],
                'address' => $loc['address'],
                'shift' => 'Day/Night',
                'open_time' => '08:00:00',
                'close_time' => '23:30:00',
                'is_booked' => false,
                'price' => rand(1200, 3500),
                'facilities' => 'Parking, Restroom, Cold Water, Dressing Room, Night Lights',
                'f_image' => 'turf_' . rand(1, 4) . '.jpg', // Placeholders we expect or default image failbacks
                'image_gallery' => null,
                'user_id' => 1,
                'user_type' => 'tmanager',
            ]);
        }
    }
}
