<?php

namespace App\Http\Controllers;

use App\Models\book;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests\StorybookRequest;
use App\Http\Requests\UpdatebookRequest;


class BookController extends Controller
{
    public function booking(){
        return view('master-pages.book');
    }
  
    public function booked(Request $request){
      
        $book = new book();
        $book->name = $request->name;
        $book->email = $request->email;
        $book->checkin = Carbon::createFromFormat('m/d/Y h:i A', $request->checkin)->format('Y-m-d H:i:s');
        $book->checkout = Carbon::createFromFormat('m/d/Y h:i A', $request->checkout)->format('Y-m-d H:i:s');
        $book->adult = $request->adult;
        $book->children = $request->children;
        $book->room = $request->room;
        $book->save();
        return Redirect('/book');

    }
}
