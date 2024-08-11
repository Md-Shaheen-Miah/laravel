<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book(){

        return view('book');
    }

    public function guest(Request $request){
        $book = new Book;
        $book->name = $request->name;
        $book->email = $request->email;
        $book->address = $request->address;

        $book->save();

        return redirect()->back()->with('success','your post has been booked!');
    }
}
