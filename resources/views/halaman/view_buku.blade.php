

@extends('index')
@section('title', 'Buku')

@section('isihalaman')
    <h3><center>Daftar Buku Perpustakaan SMK Negeri 1 Cisarua</center></h3>
    
    <!-- Awal Modal tambah data Buku -->
<div class="modal fade" id="modalBukuTambah" tabindex="-1" role="dialog" aria-labelledby="modalBukuTambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBukuTambahLabel">Form Input Data Buku</h5>
            </div>
            <div class="modal-body">

                <form name="formbukutambah" id="formbukutambah" action="/buku/tambah " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="idbuku" class="col-sm-4 col-form-label">Kode Buku</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="kodebuku" name="kodebuku" placeholder="Masukan Kode Buku">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-4 col-form-label">Judul Buku</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="pengarang" class="col-sm-4 col-form-label">Nama Pengarang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukan Nama Pengarang">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="penerbit" class="col-sm-4 col-form-label">Penerbit</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukan Nama Penerbit">
                        </div>
                    </div>

                    <p>
                    <div class="modal-footer">
                        <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="bukutambah" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal tambah data buku -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBukuTambah"> 
    Tambah Data Buku 
    
</button>


    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Buku</td>
                <td align="center">Kode Buku</td>
                <td align="center">Judul Buku</td>
                <td align="center">Pengarang</td>
                <td align="center">Penerbit</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($buku as $index=>$bk)
                <tr>
                    <td align="center" scope="row">{{ $index + $buku->firstItem() }}</td>
                    <td>{{$bk->idbuku}}</td>
                    <td>{{$bk->kodebuku}}</td>
                    <td>{{$bk->judul}}</td>
                    <td>{{$bk->pengarang}}</td>
                    <td>{{$bk->penerbit}}</td>
                    <td align="center">
                        
                        <button class="btn-warning">
                            Edit
                        </button>
                        |
                        <a href="buku/hapus/{{$bk->idbuku}}" onclick="return confirm('Yakin mau dihapus?')">
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
    Halaman : {{ $buku->currentPage() }} <br />
    Jumlah Data : {{ $buku->total() }} <br />
    Data Per Halaman : {{ $buku->perPage() }} <br />

    {{ $buku->links() }}
    <!--akhir pagination-->

    <!-- Awal Modal tambah data Buku -->
    <div class="modal fade" id="modalBukuTambah" tabindex="-1" role="dialog" aria-labelledby="modalBukuTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBukuTambahLabel">Form Input Data Buku</h5>
                </div>
                <div class="modal-body">

                    <form name="formbukutambah" id="formbukutambah" action="/buku/tambah " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="idbuku" class="col-sm-4 col-form-label">Kode Buku</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="kodebuku" name="kodebuku" placeholder="Masukan Kode Buku">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="judul" class="col-sm-4 col-form-label">Judul Buku</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="pengarang" class="col-sm-4 col-form-label">Nama Pengarang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukan Nama Pengarang">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="penerbit" class="col-sm-4 col-form-label">Penerbit</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukan Nama Penerbit">
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="bukutambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Akhir Modal tambah data buku -->
    
@endsection