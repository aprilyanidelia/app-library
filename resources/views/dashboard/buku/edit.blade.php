@extends('layout.index')

@section('container')
<div class="container">
  <div class="row">
    <div class="mb-2">
      <h3>Edit buku</h3>
    </div>

    <div class="col-6 col-lg-6">
      @foreach($bukus as $data)
      <form method="post" action="{{ route('buku.update', ['dashboard' => $data->id]) }}" enctype="multipart/form-data">
        @method('put')

        @csrf
        <div class="mb-3 d-flex">
          <div class="col-md-5">Cover buku</div>
          <div class="col-md-12">
            <input type="hidden" name="oldImage" value="{{$data->image}}">
            @if($data->image)
            <img src="{{asset('/post')}}/{{$data->image}}" class="img-preview img-fluid mb-3 col-sm-6 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-6">
            @endif
            <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="image"
              onchange="previewImage()" value="{{old('image')}}">
            @error('image')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>

        <div class="mb-3 d-flex">
          <div class="col-md-5">Kategori</div>
          <div class="col-md-12">
            <select class="form-select" name="category_id">
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->kategori}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="mb-3 d-flex">
          <div class="col-md-5">Judul buku</div>
          <div class="col-md-12">
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" autofocus
              required value="{{$data->nama}}">
            @error('nama')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>
        <div class="mb-3 d-flex">
          <div class="col-md-5">Kode buku</div>
          <div class="col-md-12">
            <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="kode"
              value="{{$data->kode}}">
            @error('kode')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>
        
        <div class="mb-3 d-flex">
          <div class="col-md-5">Penulis</div>
          <div class="col-md-12">
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" id="penulis"
              value="{{$data->penulis}}">
            @error('penulis')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>

        <div class="mb-3 d-flex">
          <div class="col-md-5">Penerbit</div>
          <div class="col-md-12">
            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit"
              value="{{$data->penerbit}}">
            @error('penerbit')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>
        <div class="mb-3 d-flex">
          <div class="col-md-5">Tahun Terbit</div>
          <div class="col-md-12">
            <select name="thn_terbit" id="thn_terbit" class="form-control" required>
              <option value="" disabled selected>Pilih Tahun Terbit</option>
              @php
              $tahunSekarang = date('Y');
              $tahunAwal = 1940;
              $selectedYear = old('thn_terbit', $data->thn_terbit ?? null);
              @endphp
              @for ($tahun = $tahunSekarang; $tahun >= $tahunAwal; $tahun--)
              <option value="{{ $tahun }}" {{ $selectedYear==$tahun ? 'selected' : '' }}>{{ $tahun }}</option>
              @endfor
            </select>
          </div>
        </div>
        <div class="mb-3 d-flex">
          <div class="col-md-5">Jumlah halaman</div>
          <div class="col-md-12">
            <input type="text" class="form-control @error('halaman') is-invalid @enderror" name="halaman" id="halaman"
              value="{{$data->halaman}}">
            @error('halaman')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>

        <div class="mb-3 d-flex">
          <div class="col-md-5">stok</div>
          <div class="col-md-12">
            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" id="stok"
              value="{{$data->stok}}">
            @error('stok')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>

        <div class="mb-3 d-flex">
          <div class="col-md-5">Deskripsi</div>
          <div class="col-md-12">
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="5"
              value="{{$data->deskripsi}}">{{$data->deskripsi}}</textarea>
            @error('deskripsi')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>
        

        <button type="submit" class="btn btn-success">Edit buku</button>
      </form>
      @endforeach
    </div>
  </div>
</div>
</div>
@endsection