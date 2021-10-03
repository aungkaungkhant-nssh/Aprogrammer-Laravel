<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return  Post::factory(10)->create();
        // DB::table('posts')->insert([
        //     'name' => Str::random(10),
        //     'description' => Str::random(100),
      
        // ]);
    }
}
