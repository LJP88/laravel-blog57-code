<?php
/**
 * Created by Leon.
 * User: Leon Lee
 * Date: 2019/2/7
 * Time: 20:54
 */

return [
    'name' => "LíJimpéyのBlog",
    'title' => "LíJimpéyのBlog",
    'subtitle' => '°Thanatosゞ 醉︿ㄝ',
    'description' => '哈哈哈哈哈哈哈哈哈',
    'author' => 'Leon Lee',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads',
    ],
    'contact_email'=>env('MAIL_FROM'),
];