@extends('siswa.dashboard.index')

@section('main')
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

<div class="mt-4" style="padding: 15px 15px;">
    <h4 class="mb-4">Berbagai macam koleksi yang tersimpan</h4>

    <div class="col-6">
        @if(session()->has('delete'))
        <div class="alert alert-success col-6 mt-4" role="alert">
        {{session('delete')}}
        </div>
        @endif
    </div>

    @php
    $i=1;
    @endphp
    
    <table class="table">
        <thead>
            <tr style="background-color: #B5C0D0;">
                <th scope="col">No</th>
                <th scope="col">Buku</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($koleksis as $data)
            @if($data->HaveUser->id == auth()->user()->id)
            <tr style="vertical-align: middle;">
                <td>{{$i++}}</td>
                <td><img src="{{asset('/post')}}/{{$data->HaveBuku->image}}" style="height: 150px;"></td>
                <td>@if($data->HaveBuku->stok > 0)
                    <p><span class="text-success">Tersedia</span></p>
                    @else($data->HaveBuku->stok == 0)
                    <p><span class="text-danger">Sedang dipinjam</span></p>
                    @endif
                </td>
                <td>
                    <div class="d-flex gap-3 justify-content-center align-items-center" >
                        <div class="detail">
                            <a href="{{ route('pinjam.index', ['id' => $data->HaveBuku->id]) }}">
                                <button class="btn btn-success" type="submit"><i class='bx bx-detail'></i></button>
                            </a>
                        </div>
                        
                        <div class="delete">
                            <button class="btn btn-danger" data-bs-target="#exampleModalToggle2{{$data->id}}"
                                data-bs-toggle="modal"><i class='bx bx-trash'></i></button>
    
                            <div class="modal fade" id="exampleModalToggle2{{$data->id}}" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            Apakah Anda yakin akan menghapus <b>{{$data->HaveBuku->nama}} </b> dari koleksi?
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle"
                                                data-bs-toggle="modal">Tidak</button>
                                            <form action="{{ route('koleksi.destroy', ['koleksi'=> $data -> id]) }}"
                                                method="post">
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
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection