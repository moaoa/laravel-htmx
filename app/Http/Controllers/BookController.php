<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(): View
    {
        $books = Book::all();
        return view('books.index')->with('books', $books);
    }

    public function store(StoreBookRequest $request): View
    {
        $validatedData = $request->validated();

        //$book = Book::create($validatedData);

        $books = Book::all();
        return view('books')->with('books.index', $books);
    }

    public function create(): View
    {
        return view('books.create');
    }
}
