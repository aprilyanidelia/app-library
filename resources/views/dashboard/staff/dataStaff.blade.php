@extends('layout.index')

@section('container')
<h2>Data petugas</h2>

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
            <th>Username</th>
            <th>Nama lengkap</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            
        </tr>
    </tbody>
</table>
@endsection