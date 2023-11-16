<?php

namespace App\Http\Controllers;

use App\Models\PetugasModel;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
     //method untuk tampil data petugas
     public function bukutampil()
     {
         $datapetugas = PetugasModel::orderby('idpetugas', 'ASC')
         ->paginate(5);
 
         return view('halaman/view_petugas',['petugas'=>$datapetugas]);
     }
}
