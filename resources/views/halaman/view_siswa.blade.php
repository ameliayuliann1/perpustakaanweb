@extends('index')
@section('title', 'siswa')

@section('isihalaman')
    <h3><center>Data Siswa</center><h3>
    <h3><center>Perpustakaan SMK Negeri 1 Cisarua</center></h3>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa"> 
        Tambah Data Siswa
    </button>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID siswa</td>
                <td align="center">Nama siswa</td>
                <td align="center">kelas</td>
                <td align="center">Hp</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($siswa as $index=>$sw)
                <tr>
                    <td align="center" scope="row">{{ $index + $siswa->firstItem() }}</td>
                    <td align="center">{{$sw->idsiswa}}</td>
                    <td>{{$sw->namasiswa}}</td>
                    <td>{{$sw->kelas}}</td>
                    <td>{{$sw->hp}}</td>
                    <td align="center">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalSiswaEdit{{$sw->idsiswa}}"> 
                            Edit
                        </button>
                        |
                        <a href="siswa/hapus/{{$sw->idsiswa}}" onclick="return confirm('Yakin mau dihapus?')">
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
    Halaman : {{ $siswa->currentPage() }} <br />
    Jumlah Data : {{ $siswa->total() }} <br />
    Data Per Halaman : {{ $siswa->perPage() }} <br />

    {{ $siswa->links() }}
    <!--akhir pagination-->
    
@endsection