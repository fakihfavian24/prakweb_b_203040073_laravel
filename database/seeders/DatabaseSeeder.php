<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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

        User::create([
            'name' => 'Fakih Favian Wibowo',
            'username' => 'fakihfavian',
            'email' => 'fakih@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Anonymous',
        //     'email' => 'anonymous@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae autem! Ducimus, at culpa? Aliquam quidem enim numquam tempora commodi, maiores, necessitatibus accusantium, at quasi provident quis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae autem! Ducimus, at culpa? Aliquam quidem enim numquam tempora commodi, maiores, necessitatibus accusantium, at quasi provident quis. Ducimus ea laborum placeat reiciendis eos beatae dignissimos illum sit consequuntur. Repellat reiciendis voluptas, nostrum expedita quidem cum beatae necessitatibus exercitationem ad molestiae voluptatem excepturi at aperiam, porro dicta, et qui! Similique nemo praesentium delectus quis tempora voluptate cupiditate itaque quo saepe neque quibusdam beatae eligendi inventore, accusamus debitis hic, esse omnis aliquam voluptas architecto! Neque asperiores optio beatae accusantium quas, nulla aliquam alias illum. Dolore repudiandae quia sit repellat. Distinctio, hic nihil.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae autem! Ducimus, at culpa? Aliquam quidem enim numquam tempora commodi, maiores, necessitatibus accusantium, at quasi provident quis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae autem! Ducimus, at culpa? Aliquam quidem enim numquam tempora commodi, maiores, necessitatibus accusantium, at quasi provident quis. Ducimus ea laborum placeat reiciendis eos beatae dignissimos illum sit consequuntur. Repellat reiciendis voluptas, nostrum expedita quidem cum beatae necessitatibus exercitationem ad molestiae voluptatem excepturi at aperiam, porro dicta, et qui! Similique nemo praesentium delectus quis tempora voluptate cupiditate itaque quo saepe neque quibusdam beatae eligendi inventore, accusamus debitis hic, esse omnis aliquam voluptas architecto! Neque asperiores optio beatae accusantium quas, nulla aliquam alias illum. Dolore repudiandae quia sit repellat. Distinctio, hic nihil.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke-Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae autem! Ducimus, at culpa? Aliquam quidem enim numquam tempora commodi, maiores, necessitatibus accusantium, at quasi provident quis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae autem! Ducimus, at culpa? Aliquam quidem enim numquam tempora commodi, maiores, necessitatibus accusantium, at quasi provident quis. Ducimus ea laborum placeat reiciendis eos beatae dignissimos illum sit consequuntur. Repellat reiciendis voluptas, nostrum expedita quidem cum beatae necessitatibus exercitationem ad molestiae voluptatem excepturi at aperiam, porro dicta, et qui! Similique nemo praesentium delectus quis tempora voluptate cupiditate itaque quo saepe neque quibusdam beatae eligendi inventore, accusamus debitis hic, esse omnis aliquam voluptas architecto! Neque asperiores optio beatae accusantium quas, nulla aliquam alias illum. Dolore repudiandae quia sit repellat. Distinctio, hic nihil.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke-Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae autem! Ducimus, at culpa? Aliquam quidem enim numquam tempora commodi, maiores, necessitatibus accusantium, at quasi provident quis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae autem! Ducimus, at culpa? Aliquam quidem enim numquam tempora commodi, maiores, necessitatibus accusantium, at quasi provident quis. Ducimus ea laborum placeat reiciendis eos beatae dignissimos illum sit consequuntur. Repellat reiciendis voluptas, nostrum expedita quidem cum beatae necessitatibus exercitationem ad molestiae voluptatem excepturi at aperiam, porro dicta, et qui! Similique nemo praesentium delectus quis tempora voluptate cupiditate itaque quo saepe neque quibusdam beatae eligendi inventore, accusamus debitis hic, esse omnis aliquam voluptas architecto! Neque asperiores optio beatae accusantium quas, nulla aliquam alias illum. Dolore repudiandae quia sit repellat. Distinctio, hic nihil.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
