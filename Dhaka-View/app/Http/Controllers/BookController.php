<?php

namespace App\Http\Controllers;

use App\Models\book;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests\StorybookRequest;
use App\Http\Requests\UpdatebookRequest;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function booked()
    {
        
        $books = book::all();
        return view('admin-pages.booked',compact('books'));
        /* Show the table for creating a new resource. */
    }

    
    public function book()
    {
        return view('master-pages.book'); /* Show the form for creating a new resource. */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function story(StorybookRequest $request) /* data insert */
    {
      
        return Redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editstore(StorybookRequest $request)
    { 
     
        $book = book::find($request->book_id);
        $book->name = $request->name;
        $book->email = $request->email;
        $book->checkin = Carbon::createFromFormat('m/d/Y h:i A', $request->checkin)->format('Y-m-d H:i:s');
        $book->checkout = Carbon::createFromFormat('m/d/Y h:i A', $request->checkout)->format('Y-m-d H:i:s');
        $book->adult = $request->adult;
        $book->children = $request->children;
        $book->room = $request->room;
        $book->save();
        return Redirect('/booked');
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($book_id)
    {
        $book = book::find($book_id);
        return view('admin-pages.bokedt',compact('book'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $book = book::find($request->book_id);
        
        $book->delete();
        return Redirect('/booked'); 
    }
}
