@extends('layout.index')

@section('container')
<h1>Berbagai macam ulasan</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($ulasans as $ulasan)
        <div class="col ">
        <div class="card">
                    <div class="card-body">
                        <h4 class="card-text">{{$ulasan->HaveUser->nm_lengkap}}</h4>
                        <h6 class="card-title">{{$ulasan->HaveBuku->nama}}</h6>
                        <p class="card-text">{{$ulasan->ulasan}}</p>
                        <p class="card-text">Rating: {{$ulasan->rating}} / 5</p>
                    </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection