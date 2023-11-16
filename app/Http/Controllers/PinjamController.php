<?php

namespace App\Http\Controllers;

use App\Models\PinjamModel;
use Illuminate\Http\Request;
use App\Http\Controllers\PinjamController;

class PinjamController extends Controller
{
        //method untuk tampil data peminjaman
        public function pinjamtampil()
        {
            $datapinjam = PinjamModel::orderby('idpinjam', 'ASC')
            ->paginate(5);
    
            return view('halaman/view_pinjam',['pinjam'=>$datapinjam]);
        }
    
}
