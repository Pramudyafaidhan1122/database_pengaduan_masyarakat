<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;


class PengaduanControllers extends Controller
{
    function index(){
          //return "hiii";
        $judul = "selamat datang";
        $pengaduan = DB::table('pengaduan')->get();

        return view('home', ['TextJudul' => $judul, 'pengaduan' => $pengaduan]); 
    }

    function tampil_pengaduan(){
        return view('isi');
    }

    function isi_pengaduan(Request $request){
      
        $request->validate([
            'isi_laporan' => 'required|min:10'
        ]);
        $isi = $request->isi_laporan;
        
        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '123',
            'isi_laporan' => $isi,
            'foto' => '',
            'status' => '0'
        ]);    
        return redirect('home');
}
 function detail_ppengaduan($id){
    echo "tampil";
 }
}
