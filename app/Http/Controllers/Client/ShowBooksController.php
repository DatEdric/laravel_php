<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowBooksController extends Controller
{
    public function show(Category $category) {
        $books = $category->books()->get();
        return view('client.pages.show', compact('category', 'books'));
    }

    public function detail( Book $book)  {

        return view('client.pages.detail', compact('book'));
    }
}
