<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //sample creator users
         $users = User::count() < 3
                    ? collect([
                        User::create([
                            'name' => 'Pixel Forge',
                            'email' => 'pixel@forge.com',
                            'password' => bcrypt('password'),
                        ]),
                        User::create([
                            'name' => 'Seismic Games',
                            'email' => 'seis@gms.com',
                            'password' => bcrypt('password'),
                        ]),
                    ])
                    : User::take(2)->get();

            $craftTitles = [
                'Space Explorer',
                'Mystic Quest',
                'Cyber Racer',
                'Fungeon Crawler'
            ];

            $crafts = [
                "An epic space adventure game where players explore uncharted galaxies and encounter alien civilizations.",
                "A fantasy role-playing game filled with magic, mythical creatures, and challenging quests.",
                "A high-speed racing game set in a futuristic cyberpunk world with customizable vehicles.",
                "A dungeon-crawling game where players navigate through procedurally generated levels filled with traps and monsters."
                ];

            foreach (array_combine($craftTitles, $crafts) as $title => $description) {
                $users->random()->crafts()->create([
                    'title' => $title,
                    'description' => $description,
                    'created_at' => now()->subMinutes(rand(5, 1440))
                ]);
            }
    }
}
