<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\DetailArtikel;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        
        return view('dashboard.artikel.index', compact('artikel'));
    }

    public function create()
    {
        $tag = Tag::all();
        $kategori = Kategori::all();
        return view('dashboard.artikel.create', compact('tag','kategori'));
    }

    public function store(Request $request)
    {
        $model = new Artikel();
        $model->judul = $request->judul;
        $model->slug = Str::slug($request->judul);
        $model->kategori_id = $request->kategori_id;
        $model->user_id = FacadesAuth::user()->id;
        $model->status_publish = $request->status_publish;
        $model->body = htmlspecialchars($request->body);
        $gambar_artikel              = $request->file('gambar_artikel');
        if($gambar_artikel){
            $gambar_artikelpath     = $gambar_artikel->store('images/artikel', 'public');
            $model->gambar_artikel    = $gambar_artikelpath;
        }
        $req = count($request->tag_id);
        $model->save();

        //dd($request->tag_id);
        $id_artikel = $model->id;
        // dd($id_artikel);
        for($i=0; $i<$req; $i++){
            
            $insert = [
                'artikel_id' => $id_artikel,
                'tag_id'=> $request->tag_id[$i],
            ];
            DetailArtikel::insert($insert);
        }

        Alert::success(' Succes ', ' Berhasil Tambah Artikel');
        return redirect()-> route('artikel.index');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        // dd($artikel);
        $status = "Publish";
        $artikel->status_publish = $status;
        $artikel->update();

        Alert::success(' Succes ', ' Publish Artikel');
        return redirect()-> route('artikel.index');
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        $tag = Tag::all();
        // $detail = DetailArtikel::all();
        $detail = DetailArtikel::select('id','tag_id')->where('artikel_id', $id)->get();
        // dd($detail);


        return view('dashboard.artikel.edit', compact('artikel','kategori','tag','detail'));
    }

    public function update(Request $request, $id)
    {
        $ubah_artikel = Artikel::findOrFail($id);
        $gambar_baru = $request->file('new_gambar');
        $gambar_lama = $request->gambar_lama;
        if(!empty($gambar_baru)){
            if($ubah_artikel->gambar_artikel && file_exists(storage_path('app/public/' . $ubah_artikel->gambar_artikel))){
                Storage::delete('public/'. $ubah_artikel->gambar_artikel);
            }
            $gambar_baru_path = $gambar_baru->store('images/artikel', 'public');

            $ubah_artikel->gambar_artikel = $gambar_baru_path;
        }

        $ubah_artikel->judul = $request->judul;
        $ubah_artikel->slug = Str::slug($request->judul);
        $ubah_artikel->kategori_id = $request->kategori_id;
        $ubah_artikel->user_id = FacadesAuth::user()->id;
        $ubah_artikel->status_publish = $request->status_publish;
        $ubah_artikel->body = htmlspecialchars($request->body);
        $ubah_artikel->save();
        // $tags = $ubah_artikel();
        // dd($ubah_artikel);
        Alert::success(' Succes ', ' Berhasil Ubah Artikel');
        return redirect()->route('artikel.index');
    }

    public function destroy($id)
    {
        
        $post = Artikel::findOrFail($id);
        //dd($id);

        $tag = DetailArtikel::where('artikel_id', $id);
        
        $tag->forceDelete();
        Storage::delete('public/'. $post->gambar_artikel);
        $post->forceDelete();
        
        Alert::success(' Succes ', ' Berhasil Hapus Artikel');
        return redirect()->route('artikel.index');
    }

}
