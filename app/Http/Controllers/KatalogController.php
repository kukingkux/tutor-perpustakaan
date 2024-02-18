<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index($id) {
        $book = Book::find($id);

        return view('pages.bookdetails', compact('book'));
    }
}
