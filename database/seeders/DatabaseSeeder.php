<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Rabbi',
            'email' => 'rabbi@gmail.com'
        ]);

        Listing::factory(5)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Serior Developer',
        //     'tags' => 'laravel javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'acme@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque est magnam vitae sit iure nisi molestiae numquam eaque dignissimos mollitia?'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'php laravel react mysql',
        //     'company' => 'Enosis',
        //     'location' => 'Banani, Dhaka',
        //     'email' => 'enosis@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque est magnam vitae sit iure nisi molestiae numquam eaque dignissimos mollitia?'
        // ]);
    }
}
