@extends('layout.index')

@section('container')

@if(session()->has('edit'))
<div class="alert alert-warning col-6 mt-4" role="alert">
  {{session('edit')}}
</div>
@endif

<div class="container">
  <div class="row">
    <div class="col-6 col-lg-6">
      <form method="post" action="{{ route('buku.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex">
          <div class="col-md-5">Cover buku</div>
          <div class="col-md-12">
            <img class="img-preview img-fluid mb-3 col-sm-6">
            <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="image"
              onchange="previewImage()">
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
            <select class="form-select" name="category_id" id="category_id">
              <option value="" selected>Pilih kategori</option>
              @foreach($categories as $data)
              <option value="{{$data->id}}">{{$data->kategori}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="mb-3 d-flex">
          <div class="col-md-5">Judul buku</div>
          <div class="col-md-12">
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" 
            value="{{old('nama')}}">
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
              value="{{old('kode')}}">
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
              value="{{old('penulis')}}">
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
            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit"
              id="penerbit" value="{{old('penerbit')}}">
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
            <select name="thn_terbit" id="thn_terbit" class="form-control">
              <option value="" disabled selected>Pilih Tahun Terbit</option>
              @php
              $tahunSekarang = date('Y');
              $tahunAwal = 1900;
              @endphp
              @for ($tahun = $tahunSekarang; $tahun >= $tahunAwal; $tahun--)
              <option value="{{ $tahun }}">{{ $tahun }}</option>
              @endfor
            </select>
          </div>
        </div>
        <div class="mb-3 d-flex">
          <div class="col-md-5">Jumlah halaman</div>
          <div class="col-md-12">
            <input type="text" class="form-control @error('halaman') is-invalid @enderror" name="halaman" id="halaman"
              value="{{old('halaman')}}">
            @error('halaman')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>
        <div class="mb-3 d-flex">
          <div class="col-md-5">Stok</div>
          <div class="col-md-12">
            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" id="stok"
              value="{{old('stok')}}">
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
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi"
              rows="5">{{ old('deskripsi', $data->deskripsi) }}</textarea>
            @error('deskripsi')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>


        <button type="submit" class="btn btn-success mb-3">Tambah buku</button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection