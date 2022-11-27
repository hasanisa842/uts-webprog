<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index(Request $request){
        $publish = DB::table('book_publishers')->get();
        $publishing = Publisher::find($request->id);
        $publishing->name = $request->name;
        $publishing->address = $request->address;
        $publishing->phone = $request->address;
        $publishing->email = $request->address;
        $publishing->image_url = $request->address;
        return view('publisher', compact('publish','publishing'));
    }

    public function publisher_index(){
        return view('publisher', [
            'book' => Books::latest()->BookFilter(request(['search']))->paginate(5)->withQueryString(),
            'category' => Category::all(),
            'publisher' => Publisher::latest()->paginate(5)->withQueryString(),
        ]);
    }


}

    // public function find($id){
    //     $books = Books::where("publisher_id", $id)->paginate(5)->withQueryString();
    //     $publisher = Publisher::findOrfail($id);
    //     $showPublisher = $publisher->name . "<br>" . $publisher->address . "<br>" . $publisher->phone . "<br>" . $publisher->email;
    // }