<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    protected function index(){
        $berita = DB::table('beritas')->get();
        return view('berita.index', compact('berita'));
    }

    protected function create(){
        return view('berita.create');
    }

    protected function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'content'  => 'required',
            'penulis' => 'required'
        ]);
        $query = DB::table('beritas')->insert([
            "judul" => $request["judul"],
            "content"  => $request["content"],
            "penulis" => $request["penulis"]
        ]);
        return redirect('/berita');
    }

    protected function show($id){
        $berita = DB::table('beritas')->where('id', $id)->first();
        $tag = DB::table('tag_beritas')->join('beritas','tag_beritas.berita_id','=',$berita->id)->join('tags','tag_beritas.tag_id','=','tags    .id')
                ->select('tag.nama');

        return view('berita.show', compact('berita','tag'));
    }

    protected function edit($id){
        $berita = DB::table('beritas')->where('id', $id)->first();
        return view('berita.edit', compact('berita'));
    }

    protected function update($id, Request $request){
        $request->validate([
            'judul' => 'required',
            'content' => 'required',
            'penulis' => 'required'
        ]);

        $query = DB::table('beritas')
            ->where('id', $id)
            ->update([
                'judul' => $request["judul"],
                'content' => $request["content"],
                'penulis' => $request["penulis"]
            ]);
        return redirect('/berita');
    }

    protected function destroy($id){
        $query = DB::table('beritas')->where('id', $id)->delete();
        return redirect('/berita');
    }
}
