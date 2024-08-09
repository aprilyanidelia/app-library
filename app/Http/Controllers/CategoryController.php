<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=category::all();
        return view('dashboard.kategori.index',[
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'kategori'=>'required'
        ]);

        category::create($validatedData);

        return redirect('/kategori')->with('success', 'kategori telah ditambahkan');
    }

    // public function update(Request $request, string $id)
    // {

    //     dd($request->all());
    //     $kategori=$request->get('kategori');

    //     $data=[
    //         'kategori'=>$kategori
    //     ];

    //     try {
    //         $category = category::findOrFail($id);
    //         $category->update($data);
    //         return redirect('/kategori')->with('msg', 'Kategori berhasil diubah');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    
    //     // category::find($id)->update($data);
    //     // return redirect('/kategori')->with('msg', 'kategori berhasil diubah');
    // }

    public function destroy(string $id)
    {
        category::find($id)->delete();
        return redirect('/kategori')->with('alert', 'kategori berhasil dihapus');
    }
}
