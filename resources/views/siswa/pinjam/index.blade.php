@extends('siswa.dashboard.index')

@section('main')
<div style="padding: 15px 15px;">
    <div class="p-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard/user">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>


        @foreach($bukus as $data)
        <div class="d-flex align-items-center gap-5">
            <div class="col-lg-6">

                @if(session()->has('success'))
                <div class="alert alert-success col-6 mt-4" role="alert">
                    {{session('success')}}
                </div>
                @endif

                @if(session()->has('alert'))
                <div class="alert alert-warning col-6 mt-4" role="alert">
                    {{session('alert')}}
                </div>
                @endif

                @if(session()->has('error'))
                <div class="alert alert-success col-6 mt-4" role="alert">
                    {{session('error')}}
                </div>
                @endif

                @if(session()->has('msg'))
                <div class="alert alert-success col-6 mt-4" role="alert">
                {{session('msg')}}
                </div>
                @endif

                @if($data->stok > 0)
                <p>> Status : <span class="text-success">Tersedia</span></p>
                @else($data->stok == 0)
                <p>> Status : <span class="text-danger">Sedang dipinjam</span></p>
                @endif
                <h3 class="mt-2">{{$data->nama}}</h3>
                <div class="d-flex gap-3">
                    <p><span class="text-secondary">Oleh</span> {{$data->penulis}}</p>
                    <p><span class="text-secondary">Penerbit</span> {{$data->penerbit}}</p>
                </div>
                <div class="d-flex gap-3">
                    <p><span class="text-secondary">Tahun terbit</span> {{$data->thn_terbit}}</p>
                    <p><span class="text-secondary"><i class='bx bx-book-open' style="font-size: 1.5rem;"></i></span>
                        {{$data->halaman}} halaman</p>
                </div>
                <p>{{$data->deskripsi}}</p>
                <div class="d-flex justify-content-start gap-3">
                    <form method="post" action="{{ route('pinjam.pinjam', ['pinjam' => 'id']) }}">
                        @csrf
                        <div>
                            <input type="hidden" name="buku_id" value="{{$data->id}}">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <input type="hidden" name="tanggal_peminjaman">
                            <button type="submit" class="btn btn-primary">Pinjam</button>
                        </div>
                    </form>
                    <form action="{{route ('koleksi.collect',['koleksi'=>'id'])}}" method="post">
                        @csrf
                        <input type="hidden" name="buku_id" value="{{$data->id}}">
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <button type="submit" class="btn btn-primary"><i class='bx bxs-bookmark-star'></i>
                            koleksi</button>
                    </form>
                </div>


            </div>
            <div class="text-center">
                <img src="{{asset('/post')}}/{{$data->image}}" class="img-fluid w-50">
            </div>
        </div>
        @endforeach
        <div>

        </div>
    </div>
</div>


@endsection