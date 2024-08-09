@extends('siswa.dashboard.index')

@section('main')
<style>
    /* Custom styles */
    .review-card {
        margin-bottom: 20px;
    }

    .review-card .card-title {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .review-card .card-text {
        font-size: 1rem;
    }
</style>

<div class="container">
    <h1 class="mt-3 mb-4">Ulasan Buku</h1>
    <!-- Review Card -->

    <div class="row row-cols-2">
        @foreach($pinjams as $data)
        @if($data->HaveUser->id == auth()->user()->id)
        <div class="px-2">
            <div class="card review-card p-3">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="col-9">
                        <h5 class="card-title">{{$data->HaveBuku->nama}} - {{$data->HaveBuku->penulis}}</h5>
                        <div class="d-flex gap-3 border-bottom">
                            <p class="card-text">tanggal peminjaman : {{$data->tanggal_peminjaman}}</p>
                            <p class="card-text">tanggal pengembalian : {{$data->tanggal_pengembalian}}</p>
                        </div>
                        <a href="{{route('ulasan.rate' ,['id' => $data->id])}}">
                            <button type="button" class="btn btn-primary mt-3">Nilai</button>
                        </a>

                    </div>
                    <div class="col-auto">
                        <img src="{{asset('/post')}}/{{$data->HaveBuku->image}}" style="height: 150px;">
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <!-- End Review Card -->

</div>

@endsection