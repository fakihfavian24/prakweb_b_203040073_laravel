<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
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
    ]
  ];

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find($slug)
  {
    $posts = static::all();
    // $post = [];
    // foreach ($posts as $p) {
    //   if ($p["slug"] === $slug) {
    //     $post = $p;
    //   }
    // }
    return $posts->firstWhere('slug', $slug);
  }
}
