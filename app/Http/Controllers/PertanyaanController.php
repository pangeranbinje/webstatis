<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();

        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_dibuat" => "$current_date_time",
            "profil_id" => "1"
        ]);
        return redirect('pertanyaan')->with('success', 'Post Berhasil Disimpan!');
    }

    public function index(){
        $post = DB::table('pertanyaan')->get();
        //dd($post);
        return view('pertanyaan.index',compact('post'));
    }

    public function show($id){
        $tampil = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($tampil);
        return view('pertanyaan.show', compact('tampil'));
    }

    public function edit($id){
        $edit = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($edit);
        return view('pertanyaan.edit', compact('edit'));
    }

    public function update($id, Request $request){
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();
        $query = DB::table('pertanyaan')
            ->where('id',$id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi'],
                'tanggal_diperbaharui' => "$current_date_time",
                
            ]);
        return redirect('pertanyaan')->with('success', 'Post Berhasil Diupdate!');
    }

    public function destroy($id){
        $query = DB::table('pertanyaan')->where('id',$id)->delete();

        return redirect('pertanyaan')->with('success', 'Post Berhasil Dihapus!');
    }
}