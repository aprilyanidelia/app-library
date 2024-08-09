<h2 style="text-align: center;">Laporan peminjaman buku</h2>

<style>
  .table {
    width: 100%;
    border-collapse: collapse;
  }

  .table th,
  .table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
    background-color: transparent !important;
  }

</style>

<table class="table" border="1" cellspacing="0" cellpadding="5" width="100%">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Buku</th>
      <th scope="col">Tanggal Peminjaman</th>
      <th scope="col">Tanggal Pengembalian</th>
      <th scope="col">Keterangan</th>
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
      <td>Denda</td>
    </tr>
    @elseif($data->tanggal_pengembalian == null)
    <tr class="bg-white">
      <td>{{$loop->iteration}}</td>
      <td>{{$data->HaveUser->nm_lengkap}}</td>
      <td>{{$data->HaveBuku->nama}}</td>
      <td>{{$data->tanggal_peminjaman}}</td>
      <td>{{$data->tanggal_pengembalian}}</td>
      <td>Belum mengembalikan</td>
    </tr>
    @elseif($data->tanggal_pengembalian <= \Carbon\Carbon::parse($data->tanggal_peminjaman)->addDays(7))
    <tr class="bg-green">
      <td>{{$loop->iteration}}</td>
      <td>{{$data->HaveUser->nm_lengkap}}</td>
      <td>{{$data->HaveBuku->nama}}</td>
      <td>{{$data->tanggal_peminjaman}}</td>
      <td>{{$data->tanggal_pengembalian}}</td>
      <td>Tepat waktu</td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>

<p>*Bagi peminjam yang terlambat mengembalikan buku, dikenai biaya denda sebesar Rp. 10.000;</p>
<script>
  window.print();
  setTimeout(function(){
    window.close();
  },100);
</script>
