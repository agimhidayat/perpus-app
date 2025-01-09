<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required',
        ]);

        Book::create($validated);

        return redirect('/books')->with('success', 'Book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', [
            'categories' => Category::all(),
            'book' => $book 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required',
        ]);

        $book->update($validated);

        return redirect('/books')->with('success', 'Book edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books')->with('success', 'Data berhasil diubah');
    }
}