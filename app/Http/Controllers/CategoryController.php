<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class CategoryController extends Controller
{
    public function index(){
        $books = DB::table('books')->get();
        $adventure = DB::table('book_categories')
        ->join('categories', 'book_categories.category_id', '=', 'categories.category_id')->get();
        $fantasy = DB::table('book_categories')
        ->join('categories', 'book_categories.category_id', '=', 'categories.category_id')->get();
        $comedy = DB::table('book_categories')
        ->join('categories', 'book_categories.category_id', '=', 'categories.category_id')->get();
        return view('category', [
            'books', 
            'adventure' => Books::where('book_id', '=', '35')->first(),
            'fantasy' => Books::where('book_id', '=', '1')->first(),
            'comedy' => Books::where('book_id', '=', '1' , 'AND', '35')->first(),
        ]);
    }
}

// public function index(){
//     $categories = DB::table('books')
    // ->join('categories', 'books.id', '=', 'categories.id')
    // ->join('book_categories', 'books.book_id', '=', 'book_categories.book_id')->first();
    // return view('category', compact('categories'));
//     // @dd($bookCategory);
//     return view('category', compact('bookCategory'));
// }