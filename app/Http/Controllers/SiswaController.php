<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function Siswa()
    {
        $data = Siswa::all();
        // dd($data);
        return view("index", compact('data'));
    }

    public function TDataSiswa()
    {
        return view('TambahData');
    }

    public function InsertData(Request $req)
    {
        //  dd($req->Nama);
        Siswa::create($req->all());
        return redirect()->route('siswa')->with('success', 'Input Data with name' . $req->Nama . ' success');
    }

    public function BackData($id)
    {
        $data = Siswa::find($id);
        // dd($data);
        return view("TambahData",compact('data'))->with('back','set');
    }

    public function Update(Request $req,$id){
        $data=Siswa::find($id);
        $data->update($req->all());
        return redirect()->route('siswa')->with('success', 'Update Data with name ' . $req->Nama . ' success');
    }

    public function Delete($id){
        $data=Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success', 'Delete Data with id ' . $id . ' success');
    }
}
