<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\ulasan;
use App\Models\category;
use App\Models\pinjam;
use App\Models\koleksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class siswaController extends Controller
{
    public function index()
    {
        $bukus = buku::with('category')->get();
        $categories = category::all();
        return view('siswa.dashboard.section',[
            'bukus'=>$bukus,
            'categories'=>$categories,
        ]);
    }

    public function peminjaman(Request $request, string $id)
    {   
        $bukus = buku::where('id', $id)->get();
        $user = Auth::User();
        return view('siswa.pinjam.index',[
            'bukus'=>$bukus,
            'users'=>$user
        ]);
    }


    public function pinjam(Request $request, string $id)
    {
        $request['tanggal_peminjaman']=Carbon::now()->toDateString();
        // $request['tanggal_pengembalian']=Carbon::now()->addDay(7)->toDateString();
        $data = buku::findOrFail($request->buku_id)->only('stok');

        if($data['stok'] == 0){
            return redirect('/dashboard/user')->with('alert','buku gagal dipinjam');
        }else{
            try{
                DB::beginTransaction();

                $bukus = buku::where('stok', '>', 0)->get();
                foreach ($bukus as $data) {
                    $data->stok -= 1;
                    $data->save();
                }

                pinjam::create([
                    'buku_id'=>$data->id,
                    'user_id'=>auth()->user()->id,
                    'tanggal_peminjaman'=>$request->tanggal_peminjaman,
                    'tanggal_pengembalian'=>$request->tanggal_pengembalian
                ]);

                $pinjam = pinjam::where('status_peminjaman', 'tersedia')->first();
                if ($pinjam) {
                    $pinjam->status_peminjaman = 'sedang dipinjam';
                    $pinjam->save();
                }


                DB::commit();

                return redirect()->back()->with('msg','buku berhasil dipinjam');

            }catch(\Throwable $th){
                DB::rollBack();
                dd($th);
            }
        }

    }

    public function koleksi(Request $request)
    {
        // $bukus = buku::where('id', $id)->get();
        // $user = Auth::User();
        $koleksis = koleksi::with(['HaveBuku','HaveUser'])->get();
        return view('siswa.koleksi.index',[
            'koleksis'=>$koleksis
            // 'bukus'=>$bukus,
            // 'users'=>$user
        ]);
    }

    public function collect(Request $request,string $id)
    {
        $user = auth()->user()->id;
        
        $jml = koleksi::where(['buku_id'=>$request->buku_id,'user_id'=>$request-> user_id])->first();

        // Jika data tersebut sudah ada, maka kode akan mengembalikan pesan bahwa buku telah tersedia dalam koleksi.
        if($jml){
            return redirect()->back()->with('alert','buku telah tersedia dikoleksi');
        }else{
            try {
                $data = buku::findOrFail($request->buku_id);
                $user = auth()->user()->id;

                koleksi::create([
                    'buku_id' => $data->id,
                    'user_id' => $user
                ]);
        
                return redirect()->back()->with('success', 'Koleksi berhasil disimpan.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
            }
        }
    }

    public function destroy(string $id)
    {
        koleksi::find($id)->delete();
        return redirect('/koleksi')->with('delete','Buku telah dihapus dari koleksi');
    }

    public function ulasan()
    {
        // whereNotNull('tanggal_pengembalian') pada query untuk memfilter data pinjam yang memiliki tanggal_pengembalian yang tidak null.
        $pinjams= pinjam::with(['HaveBuku','HaveUser'])->whereNotNull('tanggal_pengembalian')->get();
        return view('siswa.ulasan.main',[
            'pinjams'=>$pinjams,
        ]);
    }

    public function rate(Request $request, string $id)
    {
        $pinjams= pinjam::where('id',$id)->get();
        return view('siswa.ulasan.index',[
            'pinjams'=>$pinjams,
        ]);

    }

    public function nilai(Request $request)
    {
        try{

            $data = buku::findOrFail($request->buku_id);
    
            ulasan::create([
                'buku_id' => $data->id,
                'user_id' => auth()->user()->id,
                'ulasan'=>$request->ulasan,
                'rating'=>$request->rating
            ]);

            return redirect('/penilaian')->with('success', 'ulasan anda telah dikirim');

        }catch(\Exception $e){
            return redirect('/penilaian')->with('alert', 'terjadi kesalahan');
        }

    }


}
