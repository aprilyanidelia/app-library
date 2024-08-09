<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\category;

class PageController extends Controller
{
    public function index()
    {
        $bukus = buku::with('category')->get();
        $categories = category::all();
        return view('page.index',[
            'bukus'=>$bukus,
            'categories'=>$categories,
        ]);
    }
}
