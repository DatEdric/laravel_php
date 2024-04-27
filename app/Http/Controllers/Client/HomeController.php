<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $newBooks = Book::where('stock',1)->get();
         return view('client.layouts.master',compact('newBooks'));
    }

    public function shopping () {
        $Categories = Category::all();
        $book = Book::all();
        return view('client.pages.index', compact('Categories','book'));
    }
}
