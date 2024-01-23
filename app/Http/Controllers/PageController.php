<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function index()
    {
        // $risposta = config("data");
        $dati = [
            "libri" => Book::all()
        ];

        return view('home', $dati);
    }
}
