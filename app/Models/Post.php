<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet ab autem. In accusamus quod doloremque, sequi minima tempore placeat, obcaecati eum adipisci repellendus tempora reiciendis, suscipit voluptas nisi! Ipsam?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, itaque labore. Vitae quod architecto, modi soluta laborum quam neque cum quae. Adipisci dignissimos quia nihil commodi illum ut nam voluptatum.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, laborum voluptatibus! Iure quod nostrum ipsam vitae consectetur asperiores iusto facilis maxime, impedit nesciunt amet non dolor ut aspernatur magni mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos est laudantium aliquam aspernatur necessitatibus tempore expedita, eum dolores magni sint deleniti distinctio non qui, suscipit reprehenderit? Odio exercitationem error culpa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum qui consequatur facere libero error! Quas asperiores pariatur accusamus libero? Repellat tempore quo dolor ratione ad modi deserunt nostrum aut neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores nam sit deserunt doloribus unde corrupti. Ea libero voluptate suscipit magni sed laborum? Voluptatibus id, reiciendis voluptate vitae distinctio et?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yogi Suryatmika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet ab autem. In accusamus quod doloremque, sequi minima tempore placeat, obcaecati eum adipisci repellendus tempora reiciendis, suscipit voluptas nisi! Ipsam?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, itaque labore. Vitae quod architecto, modi soluta laborum quam neque cum quae. Adipisci dignissimos quia nihil commodi illum ut nam voluptatum.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, laborum voluptatibus! Iure quod nostrum ipsam vitae consectetur asperiores iusto facilis maxime, impedit nesciunt amet non dolor ut aspernatur magni mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos est laudantium aliquam aspernatur necessitatibus tempore expedita, eum dolores magni sint deleniti distinctio non qui, suscipit reprehenderit? Odio exercitationem error culpa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum qui consequatur facere libero error! Quas asperiores pariatur accusamus libero? Repellat tempore quo dolor ratione ad modi deserunt nostrum aut neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores nam sit deserunt doloribus unde corrupti. Ea libero voluptate suscipit magni sed laborum? Voluptatibus id, reiciendis voluptate vitae distinctio et?"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-pos-ketiga",
            "author" => "Intan Nathasa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet ab autem. In accusamus quod doloremque, sequi minima tempore placeat, obcaecati eum adipisci repellendus tempora reiciendis, suscipit voluptas nisi! Ipsam?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, itaque labore. Vitae quod architecto, modi soluta laborum quam neque cum quae. Adipisci dignissimos quia nihil commodi illum ut nam voluptatum.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, laborum voluptatibus! Iure quod nostrum ipsam vitae consectetur asperiores iusto facilis maxime, impedit nesciunt amet non dolor ut aspernatur magni mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos est laudantium aliquam aspernatur necessitatibus tempore expedita, eum dolores magni sint deleniti distinctio non qui, suscipit reprehenderit? Odio exercitationem error culpa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum qui consequatur facere libero error! Quas asperiores pariatur accusamus libero? Repellat tempore quo dolor ratione ad modi deserunt nostrum aut neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores nam sit deserunt doloribus unde corrupti. Ea libero voluptate suscipit magni sed laborum? Voluptatibus id, reiciendis voluptate vitae distinctio et?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
