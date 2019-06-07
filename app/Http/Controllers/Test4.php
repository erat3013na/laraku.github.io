<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Daftar;
use App\NilaiPeserta;
use App\Pembimbing;


class Test4 extends Controller
{
    public function index()
    {
        return view('test4/index');
    }

    public function create(Request $req)
    {
        $daftar = new Daftar();
        $daftar->tim = $req->tim;
        $daftar->anggota1 = $req->anggota1;
        $daftar->kelas1 = $req->kelas1;
        $daftar->nisn1 = $req->nisn1;
        $daftar->anggota2 = $req->anggota2;
        $daftar->kelas2 = $req->kelas2;
        $daftar->nisn2 = $req->nisn2;
        $daftar->anggota3 = $req->anggota3;
        $daftar->kelas3 = $req->kelas3;
        $daftar->nisn3 = $req->nisn3;
        $daftar->save();
        $nilaipes = new NilaiPeserta();
        $nilaipes->NilaiTes1 = 0;
        $nilaipes->NilaiTes2 = 0;
        $nilaipes->NilaiTes3 = 0;
        $nilaipes->save();
        return "Success!!";
    }



    //////////     READ      --------------
    //////////               --------------
    public function readView(){
        return view('test4/readSearch');
    }

    //searching
    public function read(Request $req)
    {
        $search = Daftar::where('tim', $req->tim)->first();
        if (isset($search->tim))
        {
            return view('test4/readView', ['data' => $search]);
        } else {
            return "Not Found!!";
        }

    }

    // All record
    public function readAll()
    {
        $orm = Daftar::all();
        return view('test4/readAll', ['teams' => $orm]);
    }




    //////////     UPDATE     --------------
    //////////                --------------

    public function updateView(Request $req)
    {
        $query = Daftar::where('id', $req->id)->first();
        return view('test4/updateView',['data' => $query]);
    }

    public function update(Request $req)
    {
        Daftar::where('id', $req->id)->update([
            'tim' => $req->tim,
            'anggota1' => $req->anggota1,
            'kelas1' => $req->kelas1,
            'nisn1' => $req->nisn1,
            'anggota2' => $req->anggota2,
            'kelas2' => $req->kelas2,
            'nisn2' => $req->nisn2,
            'anggota3' => $req->anggota3,
            'kelas3' => $req->kelas3,
            'nisn3' => $req->nisn3,
        ]);
        return view('test4/readView', ['data' => $req]);
    }


    //////////     DELETE     --------------
    //////////                --------------

    public function deleteAkey(Request $req)
    {
        $deletColum = Daftar::where('id', $req->id)->delete();
        return view('test4/readView');
    }


    /////////     RELATION ONE TO ONE      -----------
    ////////                               -----------

    public function readNilai()
    {
        $daftar = Daftar::all();
        return view('test4/readNilai',['data' => $daftar]);
    }

    public function pembimbing(Request $req)
    {
        // $query = Daftar::select('kelas1')->where('id', $req->id)->first();
        $data = Daftar::where('id', $req->id)->first();

        return view('test4/viewPembimbing', ['data' => $data]);
    }
}
