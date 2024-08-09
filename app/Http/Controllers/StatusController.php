<?php

namespace App\Http\Controllers;

use App\Models\pinjam;
use App\Models\ulasan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $pinjams = pinjam::with(['HaveBuku','HaveUser'])->get();
        return view('dashboard.pinjam.index',[
            'pinjams'=>$pinjams,       
        ]);
    }
    
    public function return(Request $request)
    {
        $data=pinjam::where('user_id',$request->user_id)->where('buku_id', $request->buku_id)->where('tanggal_pengembalian',null);

        $kembali=$data->first();

        if($data){
            $kembali->tanggal_pengembalian= Carbon::now()->toDateString();
            $kembali->save();
        }

        return redirect('/pengembalian')->with('success','Pengembalian buku berhasil dicatat');

    }

    public function print()
    {
        $pinjams = pinjam::with(['HaveBuku','HaveUser'])->get();
        return view('dashboard.pinjam.print',[
            'pinjams'=>$pinjams,       
        ]);
    }

    public function ulasan()
    {
        $ulasans = ulasan::with(['HaveBuku','HaveUser'])->get();
        return view('dashboard.ulasan.index',[
            'ulasans'=>$ulasans
        ]);
    }
}
