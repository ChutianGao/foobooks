<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class BookController extends Controller
{
    /**
    * GET /books
    */
    public function index()
    {
        return 'Here are all the books...';
    }

    /**
    * GET /secret/{password}
    */
    public function show($bookTitle)
    {
        return view('book.show')->with(['title' => $bookTitle]);
    }
	
	/**
    * GET /secret/{password}
    */
    public function getHash($password)
    {
        return Hash::make($password);
    }

}
