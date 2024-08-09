@extends('siswa.dashboard.index')

@section('main')
<style>
    /* Custom styles */
    .review-card {
        margin-bottom: 20px;
    }

    .review-card .card-body {
        padding: 20px;
    }

    .review-card .card-title {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .review-card .card-text {
        font-size: 1rem;
    }

    .rating {
        display: flex;
        flex-direction: row-reverse;
        width: 250px;
        min-height: 30px;
    }

    .rating label {
        display: flex;
        flex: 1;
        position: relative;
        cursor: pointer;
    }

    .rating label:after {
        font-family: 'FontAwesome';
        transition: all 0.4s ease-out;
        -webkit-font-smoothing: antialiased;
        position: absolute;
        content: "\f006";
        color: #777;
        top: 0;
        left: 0;
        width: 50%;
        height: 50%;
        text-align: center;
        font-size: 30px;
        line-height: 1;
    }

    .rating label:hover:after {
        color: #ffda07;
    }

    .rating input {
        display: none;
    }

    .rating input:checked+label:after,
    .rating input:checked~label:after {
        content: "\f005";
        color: #ffd900;
        text-shadow: 0 0 20px #F9BF3B;
        text-shadow: 2px 2px 2px rgb(0, 0, 0, 0.6);
    }
</style>

<div class="container">
    <h1 class="mt-5 mb-4">Penilaian</h1>

    @if(session()->has('success'))
    <div class="alert alert-success col-6 mt-4" role="alert">
    {{session('success')}}
    </div>
    @endif

    @if(session()->has('alert'))
    <div class="alert alert-danger col-6 mt-4" role="alert">
    {{session('alert')}}
    </div>
    @endif
    <!-- Review Card -->

    @foreach($pinjams as $data)
    
    <div class="card review-card">
        <div class="card-body d-flex">
            <div class="col-9">
                <form action="{{ route ('ulasan.nilai')}}" method="post">
                    @csrf
                    <h5 class="card-title">{{$data->HaveBuku->nama}}</h5>
                    <p class="card-text">Beri penilaian terhadap buku yang telah anda baca
                    <div class="mb-3">
                        <textarea class="form-control" id="ulasan" name="ulasan" rows="2"></textarea>
                    </div>
                    </p>
                    <div class="row">
                        <div class="col">
                            <p class="card-text">Beri rating: </p>
                            <div class="rating">

                                <input type="radio" name="rating" id="r-1" value="5">
                                <label for="r-1"></label>

                                <input type="radio" name="rating" id="r-2" value="4">
                                <label for="r-2"></label>

                                <input type="radio" name="rating" id="r-3" value="3">
                                <label for="r-3"></label>

                                <input type="radio" name="rating" id="r-4" value="2">
                                <label for="r-4"></label>

                                <input type="radio" name="rating" id="r-5" value="1">
                                <label for="r-5"></label>

                            </div>
                        </div>
                        <div class="col-auto">
                            <input type="hidden" name="buku_id" value="{{$data->HaveBuku->id}}">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-auto">
                <img src="{{asset('/post')}}/{{$data->HaveBuku->image}}" style="height: 250px; margin-left: 15%;">
            </div>



        </div>
    </div>
    @endforeach
    <!-- End Review Card -->

</div>
@endsection