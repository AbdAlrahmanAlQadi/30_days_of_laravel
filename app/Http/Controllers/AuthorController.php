<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors',
            'bio' => 'nullable|string',
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')->with('success', 'Author added successfully.');
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email,' . $author->id,
            'bio' => 'nullable|string',
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Author deleted successfully.');
    }

    public function show(string $id)
    {
        $author = Author::with('blogs')->find($id);

        if (!$author) {
            return abort(404);
        }

        return view('authors.show', compact('author'));
    }
}
