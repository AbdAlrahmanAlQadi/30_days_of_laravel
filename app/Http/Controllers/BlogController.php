<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Job;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function home()
    {
        return view('home', [
            'name' => 'iPhone',
            'image' => 'banner-image1.png',
            'description' => 'lorem spam ergarf ergstrg hsreg ser'
        ]);
    }
    public function blogs()
    {
        return view('blogs', [
            'blogs' => Blog::all()
        ]);
    }

    public function showBlog($id)
    {
        $blog =  Blog::find($id);
        return view('blog', ['blog' => $blog]);
    }

    public function jobs()
    {
        return view('jobs', [
            'jobs' => Job::all()
        ]);
    }

    public function showJob($id)
    {
        $job = Job::find($id);
        return view('job', ['job' => $job]);
    }

    public function about()
    {
        return view('about', [
            'about' => 'We did not reinvent the wheel',
            'bio' => 'We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.',
            'img1' => 'qadi.jpg',
            'img2' => 'qadi2.jpg',
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
