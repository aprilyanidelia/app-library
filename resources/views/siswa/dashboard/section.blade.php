@extends('siswa.dashboard.index')

@section('main')
@if(session()->has('alert'))
<div class="alert alert-success col-6 mt-4" role="alert">
  {{session('alert')}}
</div>
@endif


<div style="padding: 15px 15px;">
  <div class="col-4">
    <div class="alert alert-light" role="alert">
      Hello {{auth()->user()->username}} ! 👋
    </div>
  </div>
  <div class="col-2 mt-3">
    <select class="form-select form-select-lg mb-3">
      <option selected>semua kategori</option>
      @foreach($categories as $kategori)
      <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
      @endforeach
    </select>
  </div>

  <section id="products" class="mt-3">
    <div class="row row-cols-1 row-cols-md-5 g-4">
      @foreach($bukus as $data)
      <div class="col">
        <a href="{{ route('pinjam.index', ['id' => $data->id]) }}">
        <div class="card">
          <img src="{{asset('/post')}}/{{$data->image}}" class="card-img-top w-100 custom-bg">
        </div>
      </a>
      </div>
      @endforeach
    </div>

  </section>

</div>
@endsection