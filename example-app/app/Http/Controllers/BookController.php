<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class BookController extends Controller
{
   public function destroy(Request $request){
    $item = Book::find($request->item_id);
    $item->delete();
    return Redirect::to('/view');

   }
 
   
    public function update($item_id){
       $item = Book::find($item_id);
       return view('edit', compact('item'));

    }

    public function editStore(Request $request){
        $book = Book::find($request->$item_id);
        $book->name = $request->name;
        $book->email = $request->email;
        $book->address = $request->address;

        $book->save();
        return redirect::to('/view');


    }

    public function index()
    {    
        $books = Book::all(); 
        return view('view', compact('books')); 
    }
    public function book(){

        return view('book');
    }

    public function guest(Request $request){
        $book = new Book;
        $book->name = $request->name;
        $book->email = $request->email;
        $book->address = $request->address;

        $book->save();

        return redirect::to('/')->with('success','your post has been booked!');
    }
}


