<?php

namespace App\Http\Controllers;

use App\Models\mdlbuku;
use App\Models\mdlchart;
use App\Exports\bukuExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;


class ctbuku extends Controller
{
    //Menampilkan data dari database untuk page dashboard
    public function index (){ 
        $data = mdlbuku::paginate(4);
        return view('page.home',[
            'data' => $data
        ]);
    }

    //Menampilkan data dari database untuk page settings
    public function settings(){
        $data = mdlbuku::paginate(4);
        return view('page.settings',[
            'data' => $data
        ]);
    }

    //Menampilkan halaman cetak dokumen
    public function cetakpage(){
        return view ('page.pdf');
    }

    // Cetak pdf
    public function pdf(){
        $data = mdlbuku::all();
        $pdf = PDF::loadview('page.easpdf',[
            'data' => $data
        ]);
        return $pdf->stream();
    }

    //export excel
    public function excel(){
        return Excel::download(new bukuExport,'data_buku_perpus.xlsx');
    }

    // Mencari data 
    public function search(Request $request){
        $search = mdlbuku::where('judul_buku','like','%'.$request->search.'%')
        ->orWhere('pengarang','like','%'.$request->search.'%')
        ->orWhere('penerbit','like','%'.$request->search.'%')
        ->orWhere('tahun_terbit','like','%'.$request->search.'%')
        ->paginate(4);
        return view('page.home',['data'=>$search]);
    }

    // menghapus data 
    public function delete($id){
        mdlbuku::where('id', $id)->delete();
        return redirect ('/dashboard');
    }

    // Halaman versi
    public function versi(){
        return view ('page.kontak');
    }

    // Halaman chart
    public function chart(){
        $data = mdlchart::all();
        $dataChart='';
        for($x=0; $x < count($data); $x++){
            $dataChart .= "{name: '".$data[$x]->tahun_terbit."', data: [".$data[$x]->jumlah."]},";
        }
        // dd($dataChart);
        return view('page.chart',[
            'data' => $dataChart
        ]);
    }

    // Halaman edit
    public function edit(Request $request, $id){
        
        if($request->isMethod('post')){
            $data = $request->all();

            dd($data);
        }
    }

    //proses tambah data
    public function proses(Request $req){
        mdlbuku::create([
            'id' =>null,
            'isbn'=> $req->isbn,
            'judul_buku' => $req->judul_buku,
            'pengarang' => $req->pengarang,
            'penerbit' => $req->penerbit,
            'tahun_terbit' => $req->tahun_terbit,
            'cetakan_ke' => $req->cetakan_ke,
            'jumlah_halaman' => $req->jumlah_halaman
        ]);

        return redirect ('/dashboard');
    }

    // Proses edit (update)
    public function update($id, Request $req){
        $data = mdlbuku::where('id', $id);

        $data->update([
            'isbn' => $req->isbn,
            'judul_buku' => $req->judul_buku,
            'pengarang' => $req->pengarang,
            'penerbit' => $req->penerbit,
            'tahun_terbit' => $req->tahun_terbit,
            'cetakan_ke' => $req->cetakan_ke,
            'jumlah_halaman' => $req->jumlah_halaman
        ]);

        return redirect ('/dashboard');
    }

    
}


