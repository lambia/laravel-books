<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function index()
    {
        $risposta = config("data");
        $libri = Book::all();

        return view('home', compact("risposta", "libri"));
    }
}
