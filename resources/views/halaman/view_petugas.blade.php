@extends('index')
@section('title', 'petugas')

@section('isihalaman')
    <h3><center>Data petugas</center><h3>
    <h3><center>Perpustakaan SMK Negeri 1 Cisarua</center></h3>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahDataPetugas"> 
        Tambah Data Petugas 
    </button>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID petugas</td>
                <td align="center">Nama petugas</td>
                <td align="center">hp</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($petugas as $index=>$pt)
                <tr>
                    <td align="center" scope="row">{{ $index + $petugas->firstItem() }}</td>
                    <td align="center">{{$pt->idpetugas}}</td>
                    <td>{{$pt->namapetugas}}</td>
                    <td>{{$pt->hp}}</td>
                    <td align="center">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalTambahPetugas{{$pt->idpetugas}}"> 
                            Edit
                        </button>
                        |
                        <a href="petugas/hapus/{{$pt->idpetugas}}" onclick="return confirm('Yakin mau dihapus?')">
                            <button class="btn-danger">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--awal pagination-->
    Halaman : {{ $petugas->currentPage() }} <br />
    Jumlah Data : {{ $petugas->total() }} <br />
    Data Per Halaman : {{ $petugas->perPage() }} <br />

    {{ $petugas->links() }}
    <!--akhir pagination-->
    
@endsection