<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categories')->insert([
            [
                'id'          => 1,
                'name'        => 'Film & Animation',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 2,
                'name'        => 'Autos & Vehicles',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 10,
                'name'        => 'Music',
                'alias'       => 'music',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 15,
                'name'        => 'Pets & Animals',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 17,
                'name'        => 'Sports',
                'alias'       => 'sports',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 18,
                'name'        => 'Shorts',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 19,
                'name'        => 'Travel & Events',
                'alias'       => 'travel',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 20,
                'name'        => 'Gaming',
                'alias'       => 'gaming',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 21,
                'name'        => 'Videoblogging',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 22,
                'name'        => 'People & Blogs',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 23,
                'name'        => 'Comedy',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 24,
                'name'        => 'Education',
                'alias'       => 'education',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 25,
                'name'        => 'Style & Fashion',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 26,
                'name'        => 'Technology',
                'alias'       => 'technology',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 27,
                'name'        => 'News & Politics',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 28,
                'name'        => 'Movies & Animation',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 29,
                'name'        => 'Anime & Animation',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 30,
                'name'        => 'Documentaries',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 31,
                'name'        => 'Drama',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 32,
                'name'        => 'Family',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 33,
                'name'        => 'Other Entertainment',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 34,
                'name'        => 'Finance & Business',
                'alias'       => 'finance',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 35,
                'name'        => 'Food & Drink',
                'alias'       => 'food',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 36,
                'name'        => 'Health & Fitness',
                'alias'       => 'health',
                'active'      => true,
                'created_at'  => now(),
            ],
            [
                'id'          => 37,
                'name'        => 'Hobbies & Lifestyle',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 38,
                'name'        => 'Kids',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 39,
                'name'        => 'Medicine',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 40,
                'name'        => 'Military',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 41,
                'name'        => 'Nature & Environment',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 42,
                'name'        => 'Religion & Spirituality',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 43,
                'name'        => 'TV Shows',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 44,
                'name'        => 'Trailers',
                'alias'       => null,
                'active'      => false,
                'created_at'  => now(),
            ],
            [
                'id'          => 45,
                'name'        => 'Science',
                'alias'       => 'science',
                'active'      => true,
                'created_at'  => now(),
            ],
        ]);
    }
}
