<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\SiswaController;

class SiswaController extends Controller
{
        //method untuk tampil data siswa
        public function bukutampil()
        {
            $datasiswa = SiswaModel::orderby('idsiswa', 'ASC')
            ->paginate(5);
    
            return view('halaman/view_siswa',['siswa'=>$datasiswa]);
        }
    
}
