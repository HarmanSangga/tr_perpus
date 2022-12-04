<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class PerpusController extends Controller
{
    public function show()
    {
        $bukus = DB::table('buku')->orderby('id', 'desc')->get();
        return view('buku', ['bukus'=>$bukus]);
    }
    public function add_process(Request $buku)
    {
        DB::table('buku')->insert([
            'judul'=>$buku->judul,
            'jumlah'=>$buku->jumlah,
            'bahasa'=>$buku->bahasa,
            'terbit'=>$buku->terbit,
            'halaman'=>$buku->halaman,
            'sinopsis1'=>$buku->sinopsis1,
            'sinopsis2'=>$buku->sinopsis2
        ]);
 
        return redirect()->action('App\Http\Controllers\PerpusController@show');
    
    }
    public function show_by_admin()
    {
        $bukus = DB::table('buku')->orderby('id', 'desc')->get();
        return view('buku', ['bukus'=>$bukus]);
    }

    public function edit($id)
    {
        $buku = DB::table('buku')->where('id', $id)->first();
        return view('edit', ['buku'=>$buku]);
    }

    public function edit_process(Request $buku)
    {
        $id = $buku->id;
        $judul = $buku->judul;
        $jumlah = $buku->jumlah;
        $bahasa = $buku->bahasa;
        $terbit = $buku->terbit;
        $halaman = $buku->halaman;
        $sinopsis1 = $buku->sinopsis1;
        $sinopsis2 = $buku->sinopsis2;

        DB::table('buku')->where('id', $id)
                            ->update(['judul' => $judul, 'jumlah' => $jumlah,'bahasa' => $bahasa,'terbit' =>
                             $terbit,'halaman' => $halaman,'sinopsis1' => $sinopsis1,'sinopsis2' => $sinopsis2,]);
        Session::flash('success', 'Artikel berhasil diedit');
        return redirect()->action('App\Http\Controllers\PerpusController@show_by_admin');
    }

    public function delete($id)
    {
        //menghapus buku dengan ID sesuai pada URL
        DB::table('buku')->where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika data berhasil dihapus
        Session::flash('success', 'Artikel berhasil dihapus');
        return redirect()->action('App\Http\Controllers\PerpusController@show_by_admin');
    }

    public function index() {
        $data = array('title' => 'Dashboard');
        return view('dashboard.index', $data);
    }
}
