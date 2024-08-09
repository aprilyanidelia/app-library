@extends('layout.index')

@section('container')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


        <div class="row">
            <form action="{{route ('pinjam.return')}}" method="post">
                @csrf
                <label>Pengembalian :</label>
                <div class="d-flex gap-3 mt-2">
                  <div class="form-group col-5">
                    <select class="form-select inputbox " name="user_id" id="user_id">
                      <option value="">Pilih Anggota</option>
                      @foreach($pinjams as $data)
                      <option value="{{$data->user_id}}">{{$data->HaveUser->username}}</option>
                      @endforeach
                    </select>
                  </div>
                    <div class="form-group col-5">
                      <select class="form-select inputbox" name="buku_id" id="buku_id">
                        <option value="">Pilih Buku</option>
                        @foreach($pinjams as $data)
                        <option value="{{$data->buku_id}}">{{$data->HaveBuku->kode}} {{$data->HaveBuku->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">tambah</button>
                </div>
            </form>
        </div>

<div class="col-8 mt-4">
  <div class="alert alert-dark" role="alert">
    <h5>Catatan</h5>
    <button type="button" class="btn btn-success"></button> : Pengembalian buku kurang dari 7 hari / tepat waktu<br>
    <button type="button" class="btn btn-danger"></button> : Pengembalian buku melebihi 7 hari denda Rp. 10.000
  </div>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-6 mt-4" role="alert">
  {{session('success')}}
</div>
@endif

@if(session()->has('alert'))
<div class="alert alert-warning col-6 mt-4" role="alert">
  {{session('alert')}}
</div>
@endif

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

  .bg-red {
    background-color: #ff8f8f;
  }

  .bg-green {
    background-color: #9afd9a;
  }

  .bg-white {
    background-color: #e4e4e4f3;
  }

</style>


<a href="/print" target="_blank" >
  <button type="submit" class="btn btn-dark mb-3 mt-3"><i class='bx bxs-printer' style="font-size: 1.3rem;"></i> Print</button>
</a>

<table class="table">
  <thead>
    <tr style="background-color: #B5C0D0;">
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Buku</th>
      <th scope="col">Tanggal Peminjaman</th>
      <th scope="col">Tanggal Pengembalian</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pinjams as $data)
    @if($data->tanggal_pengembalian > \Carbon\Carbon::parse($data->tanggal_peminjaman)->addDays(7))
    <tr class="bg-red">
      <td>{{$loop->iteration}}</td>
      <td>{{$data->HaveUser->nm_lengkap}}</td>
      <td>{{$data->HaveBuku->nama}}</td>
      <td>{{$data->tanggal_peminjaman}}</td>
      <td>{{$data->tanggal_pengembalian}}</td>
    </tr>
    @elseif($data->tanggal_pengembalian == null)
    <tr class="bg-white">
      <td>{{$loop->iteration}}</td>
      <td>{{$data->HaveUser->nm_lengkap}}</td>
      <td>{{$data->HaveBuku->nama}}</td>
      <td>{{$data->tanggal_peminjaman}}</td>
      <td>{{$data->tanggal_pengembalian}}</td>
    </tr>
    @elseif($data->tanggal_pengembalian <= \Carbon\Carbon::parse($data->tanggal_peminjaman)->addDays(7))
    <tr class="bg-green">
      <td>{{$loop->iteration}}</td>
      <td>{{$data->HaveUser->nm_lengkap}}</td>
      <td>{{$data->HaveBuku->nama}}</td>
      <td>{{$data->tanggal_peminjaman}}</td>
      <td>{{$data->tanggal_pengembalian}}</td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>



<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
  
$(document).ready(function() {
    $('.inputbox').select2();
});



</script>
@endsection