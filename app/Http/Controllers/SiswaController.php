<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\DetailSiswa;

class SiswaController extends Controller
{
    public function TambahSiswa(){
    	$tampil = Siswa::all();
    	return view('tambahsiswa',compact('tampil'));
    }

    public function SimpanDataSiswa(Request $request){
    	$create = new Siswa();
    	$create ->nama = $request->input('nama');
    	$create ->jenis_kelamin = $request->input('jenis_kelamin');
    	$create ->alamat = $request->input('alamat');
    	$create ->agama= $request->input('agama');
    	$create->save();

    	return redirect('/tambahsiswa');
    }

    public function TambahDetail(){
    	return view('tambahdetail');
    }

    public function SimpanDetail(Request $request, $id){
    	$create = new DetailSiswa();
        $create->kelas =$request->input('kelas');
        $create->jurusan =$request->input('jurusan');
        $create->id_siswa=$id;
        $create->save();

        return redirect('/biodata');
    }

    public function Biodata(){
    	$join = Siswa::join('detailsiswa','siswa.id','=','detailsiswa.id_siswa')->get();
    	return view('biodata',compact('join'));
    }

    public function HomeEdit(){
        $join = Siswa::join('detailsiswa','siswa.id','=','detailsiswa.id_siswa')->get();
    	return view('homeedit',compact('join'));
    }

    public function edit($id){
        $siswa = \App\Siswa::find($id);
        return view ('edit',compact('siswa'));
    }

    public function update(Request $request,$id){
        $siswa = \App\Siswa::find($id);
        $siswa -> update($request->all());
        return redirect ('biodata');
    }
}
   

