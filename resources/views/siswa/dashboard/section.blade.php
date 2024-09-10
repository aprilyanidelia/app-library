@extends('siswa.dashboard.index')

@section('main')
<!-- @if(session()->has('alert'))
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

</div> -->


<main>
  <div class="m-1 px-3">
    <div class="d-flex flex-row justify-content-center" style="background-color:#FCDE70; border-radius:10px;">
      <div class="text-center p-3">
        <h2>Halo, {{auth()->user()->nm_lengkap}}! 👋</h2>
        <p>Selamat datang di dunia pengetahuan. Jelajahi koleksi buku kami yang luas dan nikmati pengalaman membaca yang menyenangkan.</p>
      </div>
    </div>

    <div class="mt-5">
      <div class="row">
     @if (count($bukus) == 0)
     <div class="d-flex justify-content-center">
     <div class="col-lg-2">
        <div>
          <a href="https://ibb.co.com/gTFpJVS">
            <img src="https://i.ibb.co.com/BZKxBNy/Desain-tanpa-judul-1.png" alt="Desain-tanpa-judul-1" border="0" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
    <p class="text-center  mt-3" >Oppss! Sepertinya admin/petugas tidak memposting buku. Kembali lagi lain waktu jika admin/petugas sudah memposting buku yaaa :)</p>
      @elseif(count($bukus) >= 0)
      @foreach ($bukus as $data)
      <div class="col-lg-2 col-6 py-3">
        <a href="{{ route('pinjam.index', ['id' => $data->id]) }}">
          <img src="{{asset('/post')}}/{{$data->image}}" class="img-fluid rounded" alt="">
        </a>
      </div>
      @endforeach
      @endif
  </div>
</div>

  </div>
</main>
@endsection