<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Menambahkan data sekaligus dengan factory


        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'A seeder class only contains one method by default: run. 
        //                 This method is called when the db:seed Artisan command is executed. 
        //                 Within the run method, you may insert data into your database however you wish. 
        //                 You may use the query builder to manually insert data or you may use Eloquent 
        //                 model factories.',
        // ]);

        //Memanggil Seeder
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(50)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
