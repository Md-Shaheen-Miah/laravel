<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function view(){
        $books = Book::all();
        return  $books;
    }
}
