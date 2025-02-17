<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the post table 
        \DB:: table('posts')->truncate();
        // generate 10 dummy posts data

        $posts = [];
        $faker = Factory::create();
        // $date = Carbon::create(2020,10,18,9);
        for ($i = 1; $i <= 10; $i++)
        

        {   
            $image = "Post_Image_" .rand(1,5) . ".jpg";
            $date  = date("Y-m-d H:i:s", strtotime("2019-07-18 08:00:00 +{$i} days"));           
            $posts[] = [
                'author_id' => rand(1,3),
                'title' => $faker -> sentence(rand(8,12)),
                'expert' => $faker ->text(rand(250,300)),
                'body' => $faker -> paragraphs(rand(10,15), true),
                'slug' => $faker -> slug(),
                'image' => rand(0,1) == 1 ? $image :NULL,
                'created_at' => $date,
                'updated_at' =>$date,
                // 'published_at' => $i < 5 ? $publishedDate : ( rand(0,1) == 0 ? NULL : $publishedDate -> addDays(4) )


            ];
        }

        \DB::table('posts')->insert($posts);
    }
}
