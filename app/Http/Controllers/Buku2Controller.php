<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\category;
use App\Models\pinjam;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Buku2Controller extends Controller
{
    public function index()
    {
        $bukus = buku::with('category')->get();
        $categories = category::all();
        $user=User::where('role', ['user']);
        return view('dashboard.buku.index',[
            'bukus'=>$bukus,
            'categories'=>$categories,
            'user'=>$user
        ]);
    }

    public function create()
    {
        return view('dashboard.buku.create',[
            'categories'=>category::all()
        ]);
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama'=>'required|unique:bukus',
        //     'kode'=>'required|unique:bukus',
        //     'category_id'=>'required',
        //     'stok'=>'required',
        //     'thn_terbit' => 'required|integer',
        //     'penulis'=>'required',
        //     'penerbit'=>'required',
        //     'halaman'=>'required',
        //     'deskripsi'=>'required|min:10|max:225',
        //     'image'=>'image|file|max:1024',
        // ]);

        $dataimage = $request->file('image');

        $imageName = date('YmdHi') . '.' . $dataimage->extension();
        $request->image->move(public_path('post'), $imageName);

        $save = [
            'nama'=> $request->post('nama'),
            'kode'=>$request->post('kode'),
            'stok'=>$request->post('stok'),
            'category_id'=>$request->post('category_id'),
            'thn_terbit'=> $request->post('thn_terbit'),
            'penulis'=> $request->post('penulis'),
            'penerbit'=>$request->post('penerbit'),
            'halaman'=>$request->post('halaman'),
            'deskripsi'=>$request->post('deskripsi'),
            'image' => $imageName,
        ];


        $bebas= buku::create($save);
        $bebas->save();
        return redirect('/dashboard')->with('success','Data telah ditambahkan!!');
    }

    public function edit(string $id)
    {
        $data = buku::where('id', $id)->get();
        $categories = category::all();
        return view('dashboard.buku.edit', [
            'bukus' => $data,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, string $id)
    {

        $nama = $request->get('nama');
        $kode = $request->get('kode');
        $stok = $request->get('stok');
        $category_id = $request->get('category_id');
        $thn_terbit = $request->get('thn_terbit');
        $penulis = $request->get('penulis');
        $penerbit = $request->get('penerbit');
        $halaman = $request->get('halaman');
        $deskripsi = $request->get('deskripsi');
        $imageName = $request->get('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = date('YmdHi') . '.' . $request->image->extension();
            $request->image->move(public_path('post'), $imageName);

        }

        $data = [
            'nama' => $nama,
            'kode' => $kode,
            'stok' => $stok,
            'category_id'=>$category_id,
            'thn_terbit' => $thn_terbit,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'halaman' => $halaman,
            'deskripsi' => $deskripsi,
            'image' => $imageName,
        ];

        buku::find($id) -> update($data);
        
        return redirect('/dashboard')->with('edit','Data berhasil diubah!!');
    }

    public function destroy(string $id)
    {
        buku::where('id', $id)->delete();
        return redirect('/dashboard')->with('delete','Data telah dihapus!!');
    }

    public function data(){
        $user_data=User::where('role',['user'])->get();
        return view('dashboard.data.dataUser',[
            'user_data'=>$user_data
        ]);
    }

    public function data_staff(){
        $data_staff=User::where('role',['petugas'])->get();
        return view('dashboard.staff.dataStaff',[
            'data_staff'=>$data_staff
        ]);
    }


}
