@extends('layout.index')

@section('container')

<div class="mb-3">
  <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
  <div class="row">
    <div class="col-12 col-md-4 ">
      <div class="card border-0">
        <div class="card-body py-4">
          <h5 class="mb-2 fw-bold">
            {{$bukus->count()}}
          </h5>
          <p class="mb-2 fw-bold">
            Total Buku
          </p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 ">
      <div class="card border-0">
        <div class="card-body py-4">
          <h5 class="mb-2 fw-bold">
            {{$user->count()}}
          </h5>
          <p class="mb-2 fw-bold">
            Total User
          </p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 ">
      <div class="card border-0">
        <div class="card-body py-4">
          <h5 class="mb-2 fw-bold">
            {{$categories->count()}}
          </h5>
          <p class="mb-2 fw-bold">
            Total Kategori
          </p>
        </div>
      </div>
    </div>
    
  </div>


  @if(session()->has('success'))
<div class="alert alert-success col-6 mt-4" role="alert">
  {{session('success')}}
</div>
@endif

  <div class="row">
    <div class="mb-3 d-flex justify-content-between">
  <h3 class="fw-bold fs-4 my-3">Data buku</h3>
      <a href="/dashboard/create">
        <button class="btn btn-success">+ Tambah</button>
      </a>
    </div>
    <div class="col-12">
      <table class="table table-striped">
        <thead>
        <tr style="text-align: center;">
          <th scope="col">No</th>
          <th scope="col">Cover Buku</th>
          <th scope="col">Judul</th>
          <th scope="col">Kode</th>
          <th scope="col">Kategori</th>
          <th scope="col">Stok</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($bukus as $data)
        <tr style="vertical-align: middle; text-align: center;">
          <th>{{$loop->iteration}}</th>
          <td><img src="{{asset('/post')}}/{{$data->image}}" style="height: 250px; "></td>
          <td>{{$data->nama}}</td>
          <td>{{$data->kode}}</td>
          <td>{{$data->category->kategori}}</td>
          <td>{{$data->stok}}</td>
          <td>
            <div class="d-flex gap-3 justify-content-center align-items-center">
              <div class="detail">
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                  data-bs-target="#exampleModal{{$data->id}}"><i class='bx bx-detail'></i></button>

                <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="d-flex align-items-center gap-3">
                          <div>
                            <img src="{{asset('/post')}}/{{$data->image}}" class="img-fluid w-50">
                          </div>
                          <div class="col-md-6" style="text-align: left;">
                            <h3 class="mt-4">{{$data->nama}}</h3>
                            <div class="d-flex gap-3">
                              <p><span style="color: grey;">Penulis</span> {{$data->penulis}}</p>
                              <p><span style="color: grey;">Penerbit</span> {{$data->penerbit}}</p>
                            </div>
                            <div class="d-flex gap-3">
                              <p><span style="color: grey;">Tahun terbit</span> {{$data->thn_terbit}}</p>
                              <p><span style="color: grey;">Jumlah Halaman</span> {{$data->halaman}}</p>
                            </div>
                            <p>{{$data->deskripsi}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="edit">
                <a href="{{ route('buku.edit', ['dashboard'=> $data->id]) }}">
                  <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                </a>
              </div>
              <div class="delete">
                <button class="btn btn-danger" data-bs-target="#exampleModalToggle2{{$data->id}}"
                  data-bs-toggle="modal"><i class='bx bx-trash'></i></button>

                <div class="modal fade" id="exampleModalToggle2{{$data->id}}" aria-hidden="true"
                  aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-body">
                        Apakah Anda yakin akan menghapus {{$data->nama}} dari daftar buku?
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle"
                          data-bs-toggle="modal">Tidak</button>
                        <form action="{{ route('dashboard.destroy', ['dashboard'=> $data -> id]) }}" method="post">
                          @method('delete')
                          @csrf
                          <button class="btn btn-danger" type="submit">Ya</button>
                        </form>
                      </div>
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
</div>


@endsection