<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Blog
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Exploring Laravel',
                'description' => 'A comprehensive guide to mastering Laravel for web development.',
                'image' => 'laravel.jpg',
                'date' => 'Dec 22, 2023'
            ],
            [
                'id' => 2,
                'name' => 'Understanding MVC Architecture',
                'description' => 'An in-depth look at the MVC pattern and its implementation in modern frameworks.',
                'image' => 'mvc.jpg',
                'date' => 'Sep 17, 2020'
            ],
            [
                'id' => 3,
                'name' => 'PHP Tips and Tricks',
                'description' => 'Improve your PHP coding skills with these essential tips and tricks.',
                'image' => 'php-tips.jpg',
                'date' => 'Mar 3, 2017'
            ],
            [
                'id' => 4,
                'name' => 'Introduction to Web APIs',
                'description' => 'Learn how to build and consume APIs to create dynamic and scalable web applications.',
                'image' => 'web-apis.jpg',
                'date' => 'Mar 3, 2017'
            ],
            [
                'id' => 5,
                'name' => 'Securing Your Web Applications',
                'description' => 'Best practices and techniques to ensure the security of your web applications.',
                'image' => 'security.jpg',
                'date' => 'Mar 3, 2017'
            ],
            [
                'id' => 6,
                'name' => 'JavaScript for Beginners',
                'description' => 'A beginner-friendly introduction to JavaScript programming language.',
                'image' => 'javascript.jpg',
                'date' => 'Mar 3, 2017'
            ],
            [
                'id' => 7,
                'name' => 'Building RESTful APIs with Laravel',
                'description' => 'Step-by-step guide to building RESTful APIs using Laravel framework.',
                'image' => 'rest-api.jpg',
                'date' => 'Mar 3, 2017'
            ],
            [
                'id' => 8,
                'name' => 'Responsive Web Design',
                'description' => 'Techniques and tools to create responsive and mobile-friendly web designs.',
                'image' => 'responsive-design.jpg',
                'date' => 'Mar 3, 2017'
            ],
            [
                'id' => 9,
                'name' => 'Version Control with Git',
                'description' => 'Understanding version control and how to effectively use Git in your projects.',
                'image' => 'git.jpg',
                'date' => 'Mar 3, 2017'
            ],
        ];
    }
    public static function find(int $id): array
    {
        $blog = Arr::first(static::all(), fn($blog) => $blog['id'] == $id);

        if (! $blog) {
            abort(404);
        }
        return $blog;
    }
}
