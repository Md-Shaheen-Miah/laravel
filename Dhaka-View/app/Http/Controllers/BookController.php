<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;
use Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function booked()
    {
        $books = book::all();
        return view('admin-pages.booked',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function book()
    {
        return view('master-pages.book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebookRequest $request)
    {
        $book = new book;
        $book->name = $request->name;
        $book->email = $request->email;
        $book->checkin = Carbon::createFromFormat('m/d/Y h:i A', $request->checkin)->format('Y-m-d H:i:s');
        $book->checkout = Carbon::createFromFormat('m/d/Y h:i A', $request->checkout)->format('Y-m-d H:i:s');
        $book->adult = $request->adult;
        $book->children = $request->children;
        $book->room = $request->room;
        $book->save();
        return redirect('/master-pages/home')->with('success','your post has been booked!');
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editstore()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($book_id)
    {
        $book = book::find($book_id);
        return view('admin-pages.bookededit', compact('book'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        //
    }
}
