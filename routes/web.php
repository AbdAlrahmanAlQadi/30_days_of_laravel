<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'iPhone',
        'image' => 'banner-image1.png',
        'discription' => 'lorem spam ergarf ergstrg hsreg ser'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '50,000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '10,000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '40,000',
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '50,000',
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '10,000',
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '40,000',
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about', [
        'about' => 'We did not reinvent the wheel',
        'bio' => 'We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.',
        'img1' => 'qadi.jpg',
        'img2' => 'qadi2.jpg',
    ]);
});


Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => [
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
        ]
    ]);
});

Route::get('/blogs/{id}', function ($id) {
    $blogs = [
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

    $blog = Arr::first($blogs, fn($blog) => $blog['id'] == $id);

    return view('blog', ['blog' => $blog]);
});
