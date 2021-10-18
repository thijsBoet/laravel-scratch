<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        // $user = User::factory()->create([
        //     'name' => 'John Doe'
        // ]);

        Post::factory(5)->create([
            // 'user_id' => $user->id
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, dolores nesciunt esse quo libero tenetur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, fugiat? Amet at tempore temporibus, iure obcaecati, officiis suscipit alias sed eveniet tempora neque nemo atque facilis necessitatibus expedita, deserunt vel delectus? Non suscipit perspiciatis eaque quas, nostrum molestiae harum doloremque voluptate ipsum optio, odit perferendis sequi reprehenderit alias quasi autem!'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Similique, dolores nesciunt esse quo libero tenetur.',
        //     'body' => 'Similique, dolores nesciunt esse quo libero tenetur. Reiciendis, fugiat? Amet at tempore temporibus, iure obcaecati, officiis suscipit alias sed eveniet tempora neque nemo atque facilis necessitatibus expedita, deserunt vel delectus? Non suscipit perspiciatis eaque quas, nostrum molestiae harum doloremque voluptate ipsum optio, odit perferendis sequi reprehenderit alias quasi autem!'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Reiciendis, fugiat? Amet at tempore temporibus, iure obcaecati, officiis suscipit alias sed eveniet tempora neque nemo atque facilis necessitatibus expedita, deserunt vel delectus? Non suscipit perspiciatis eaque quas, nostrum molestiae harum doloremque voluptate ipsum optio, odit perferendis sequi reprehenderit alias quasi autem!',
        //     'body' => 'Reiciendis, fugiat? Amet at tempore temporibus, iure obcaecati, officiis suscipit alias sed eveniet tempora neque nemo atque facilis necessitatibus expedita, deserunt vel delectus? Non suscipit perspiciatis eaque quas, nostrum molestiae harum doloremque voluptate ipsum optio, odit perferendis sequi reprehenderit alias quasi autem!'
        // ]);
    }
}