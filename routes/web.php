<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fakih Favian",
        "email" => "fakihfavianwibowo@unpas.ac.id",
        "image" => "1.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fakih Favian Wibowo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab laborum corporis quidem tempora officiis quisquam magnam quis assumenda fuga quo aliquid praesentium voluptatem temporibus tenetur cumque adipisci ipsam, sit mollitia, architecto natus velit nulla quae quia? Labore dolore reiciendis eos deserunt nobis voluptates mollitia quam perferendis aliquam, aliquid id aperiam nostrum eius explicabo asperiores tempora inventore consectetur et architecto facere cupiditate vero dolor quaerat? Fuga maiores unde veniam pariatur. Rerum repellat ducimus illum dolores? Maxime sequi molestiae labore non."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Anonymous",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis ipsam veniam quia, aliquid aliquam saepe quidem adipisci et, quo modi hic aspernatur nulla quas corrupti? Quo dolor repudiandae vitae, natus culpa modi mollitia delectus itaque ex quibusdam sit enim asperiores, doloremque repellendus. Nostrum vitae molestiae, veniam nulla eos eligendi velit deserunt aliquid corporis voluptatibus quasi mollitia quia. Voluptates sed ea porro. Illo quidem numquam alias necessitatibus architecto ipsum ad quos earum molestias eius eos optio suscipit mollitia aspernatur totam nesciunt ex libero, ratione velit nostrum. Dicta, quas maxime deserunt, quasi consectetur, tempore explicabo cumque illo sapiente odit quaerat iusto blanditiis?"
        ],
    ];



    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fakih Favian Wibowo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab laborum corporis quidem tempora officiis quisquam magnam quis assumenda fuga quo aliquid praesentium voluptatem temporibus tenetur cumque adipisci ipsam, sit mollitia, architecto natus velit nulla quae quia? Labore dolore reiciendis eos deserunt nobis voluptates mollitia quam perferendis aliquam, aliquid id aperiam nostrum eius explicabo asperiores tempora inventore consectetur et architecto facere cupiditate vero dolor quaerat? Fuga maiores unde veniam pariatur. Rerum repellat ducimus illum dolores? Maxime sequi molestiae labore non."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Anonymous",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis ipsam veniam quia, aliquid aliquam saepe quidem adipisci et, quo modi hic aspernatur nulla quas corrupti? Quo dolor repudiandae vitae, natus culpa modi mollitia delectus itaque ex quibusdam sit enim asperiores, doloremque repellendus. Nostrum vitae molestiae, veniam nulla eos eligendi velit deserunt aliquid corporis voluptatibus quasi mollitia quia. Voluptates sed ea porro. Illo quidem numquam alias necessitatibus architecto ipsum ad quos earum molestias eius eos optio suscipit mollitia aspernatur totam nesciunt ex libero, ratione velit nostrum. Dicta, quas maxime deserunt, quasi consectetur, tempore explicabo cumque illo sapiente odit quaerat iusto blanditiis?"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug)
            $new_post = $post;
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
