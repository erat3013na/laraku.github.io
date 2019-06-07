<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Test3 extends Controller
{
    public function index()
    {
        return view('test1');
    }

    public function proses(Request $request){
        $tim = $request->input('tim');
        return dd($_POST);
    }

    public function noobinsert(Request $req){
        DB::table('daftar')->insert([
            'tim' => $req->tim,
            'anggota1' => $req->anggota1,
            'kelas1' => $req->kelas1,
            'nisn1' => $req->nisn1,
            'anggota2' => $req->anggota2,
            'kelas2' => $req->kelas2,
            'nisn2' => $req->nisn2,
            'anggota3' => $req->anggota3,
            'kelas3' => $req->kelas3,
            'nisn3' => $req->nisn3
        ]);

        return view('test1');
    }

    public function tampilkan()
    {
       $hasil = DB::table('daftar')->get();
       return view('tampilantest3', ['teams' => $hasil]);
    }

    public function onlydd()
    {
        $result = DB::table('daftar')->pluck('kelas3');
        return dd($result);
    }

    public function trycatch()
    {
        try {
            DB::connection()->getPdo();
            echo "WOE";
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
    }


    //24 mei 2019
    public function lihat()
    {
        return view('test3');
    }

    public function perlihatkan(Request $req){
        $hasil = $req->input('tim');
        $query = DB::table('daftar')->where('tim', $hasil)->get();
        return view('testing3', ['data' => $query[0]]);
        // return dd($query[0]);
    }

    public function hapus(Request $req)
    {
        DB::table('daftar')->where('id',$req->id)->delete();
        return view('test3');

    }

    public function edit(Request $req)
    {
        $result = DB::table('daftar')->where('id',$req->id)->get();
        return view('test3_ubah', ['data' => $result[0]]);
    }
}
