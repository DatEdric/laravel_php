<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $Books = Book::with('publisher')->get();

        return view('admin.books.index', compact('Books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories = Category::all();
        $Publishers = Publisher::all();
        return view('admin.books.create', compact('Categories', 'Publishers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $book = new Book();
        $book->title = $request->title;
        $book->ISBN = $request->ISBN;
        $book->published_at = $request->published_at;
        $book->category_id = $request->category_id;
        $book->author = $request->author;
        $book->publisher_id = $request->publisher_id;
        $book->description = $request->description;
        $book->images = $request->images;
        $book->stock = $request->stock;
        $book->slug = $request->slug;
        $book->quantity = $request->quantity;
        $book->status = $request->status;




        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Book = Book::find($id);
        $Categories = Category::all();
        $Publishers = Publisher::all();
        return view('admin.books.edit', compact('Book', 'Categories', 'Publishers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->ISBN = $request->ISBN;
        $book->published_at = $request->published_at;
        $book->category_id = $request->category_id;
        $book->author = $request->author;
        $book->update($request->all());
        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::find($id)->delete();
        return redirect()->route('book.index');
    }
}
