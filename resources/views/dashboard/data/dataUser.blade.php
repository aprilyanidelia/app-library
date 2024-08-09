@extends('layout.index')

@section('container')
<h2 class="mb-4">Data pengguna aplikasi perpustakaan</h2>

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

<div class="row">
    <div class="col-lg-12 col-md-12">
        <table class="table">    
        <thead>
            <tr style="background-color: #B5C0D0;">
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Nama lengkap</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_data as $data)    
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->nm_lengkap}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->email}}</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <div class="edit">
                            <a href="">
                                edit
                            </a>
                        </div>
                        <div class="hapus">
                            <a href="">
                                hapus
                            </a>
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