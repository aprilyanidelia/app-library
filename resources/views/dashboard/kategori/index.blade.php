@extends('layout.index')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success col-6 mt-4" role="alert">
  {{session('success')}}
</div>
@endif

<h3 class="mb-3">Kategori buku</h3>
<div class="card mb-3">
  <div class="card-body">
    <div class="row">
      <form action="{{ route('kategori.store') }}" method="post">
        @csrf
        <div class="d-flex gap-3">
          <label>tambah kategori :</label>
          <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori baru....">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 text-center mt-3">
    <table class="table table-striped">
      <thead>
        <tr style="text-align: center;">
          <th>No</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$category->kategori}}</td>
          <td class="justify-content-center align-items-center">
            <div class="delete">
              <button class="btn btn-danger" data-bs-target="#exampleModalToggle{{$category->id}}"
                data-bs-toggle="modal">Hapus</button>

              <div class="modal fade" id="exampleModalToggle{{$category->id}}" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      Apakah Anda yakin akan menghapus <b>{{$category->kategori}}</b> dari daftar kategori?
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal">Tidak</button>
                      <form action="{{ route('kategori.destroy', ['kategori'=> $category -> id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">Ya</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection