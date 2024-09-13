@extends('layout.index')

@section('container')
<div class="d-flex justify-content-between">
  <div>
    <h2 class="mb-4">Data petugas</h2>
  </div>
  <div>
    <a href="/add_staff">
      <button type="submit" class="btn btn-dark">Tambah petugas</button>
    </a>
  </div>
</div>

<style>
  .table {
    width: 100%;
    border-collapse: collapse;
  }

  .table th,
  .table td {
    border: 1px solid #747474;
    padding: 8px;
    text-align: center;
    background-color: transparent !important;
  }
</style>
<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama lengkap</th>
      <th>Username</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_staff as $data)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$data->nm_lengkap}}</td>
      <td>{{$data->username}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->alamat}}</td>
      <td>
        <div class="d-flex justify-content-center gap-2">
          <button class="btn btn-warning">edit</button>
          <form action="{{route ('staff.destroy',['data_staff'=>$data->id])}}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-danger">hapus</button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection