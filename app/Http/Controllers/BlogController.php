<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->input('category');
        $categories = Category::all();

        $authorId = $request->input('author');
        $authors = Author::all();

        $query = Blog::query();

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        if ($authorId) {
            $query->where('author_id', $authorId);
        }

        $blogs = $query->paginate(6);

        return view('blogs.index', compact('blogs', 'categories', 'authors'));
    }

    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('blogs.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images'), $imageName);

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'author_id' => $request->author_id,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->with('category', 'author')->first();

        if (!$blog) {
            return abort(404);
        }
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('blogs.edit', compact('blog', 'categories', 'authors'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/images'), $imageName);
            $blog->image = $imageName;
        }

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;
        $blog->author_id = $request->author_id;
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
