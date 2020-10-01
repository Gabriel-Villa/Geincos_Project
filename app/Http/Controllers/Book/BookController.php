<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'price' => 'required',
            'qty' => 'required',
        ]);
        $book = new Book;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->qty = $request->qty;
        $book->save();
        
        return back()->with('mensaje', 'Book Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleBook = Book::findOrFail($id);
        return view('book.edit', compact('singleBook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bookUpdate = Book::findOrFail($id);
        $bookUpdate->name = $request->name;
        $bookUpdate->author = $request->author;
        $bookUpdate->price = $request->price;
        $bookUpdate->qty = $request->qty;
        $bookUpdate->save();
        return back()->with('mensaje', 'Updated book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteBook = Book::findOrFail($id);
        $deleteBook->delete();
        return back()->with('mensaje', 'The book has been successfully selected');
    }
}