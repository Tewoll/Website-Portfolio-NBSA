<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\{DetailArtikel, Kategori, Tag};
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $status = 'Publish';
        $artikel = Artikel::latest()->where('status_publish', $status)->paginate(8);
        
        $kategori = Kategori::all();
        return view('home/news', compact('artikel','kategori'));
    }
    
    public function search(Request $request)
	{
        $kategori = Kategori::all();
		// menangkap data pencarian
		$cari = $request->cari;
        $status = 'Publish';
    		// mengambil data dari table artikel sesuai pencarian data
		$artikel = Artikel::all()
		->where('judul','like',"%".$cari."%")->where('status_publish', $status);
    		// mengirim data pegawai ke view index
            dd($artikel);
		return view('home/news', compact('artikel','kategori'));
	}

    public function show($slug)
    {
        $lihat = Artikel::where('slug', $slug)->first();
        $content = htmlspecialchars_decode($lihat->body);
        // dd($lihat);
        $id_artikel = $lihat->id;
        //dd($id_artikel);
        $detail = DetailArtikel::all()->where('artikel_id', $id_artikel);
        //dd($detail);
        $status = 'Publish';
        $sebelum = Artikel::select('judul','slug')->where('id','<', $id_artikel)->where('status_publish', $status)->first();
        // dd($sebelum);
        $sesudah = Artikel::select('judul','slug')->where('id','>', $id_artikel)->where('status_publish', $status)->first();
        
        $created_po = array();
        $challan = Artikel::where('slug', $slug)->get();
        // dd($challan);
        foreach ($challan as $rec){
            $created_po[] = array_push($created_po, $rec->id);
        }

        $lain = Artikel::where('status_publish', $status)->orderBy('created_at','asc')->get();
        // dd($lain);
        return view('home/news-show', compact('lihat','detail','sebelum','sesudah','lain'));
    }

    public function carikategori($ktgrnya)
    {
        // dd($ktgrnya);
        $artslug = Kategori::where('slug', $ktgrnya)->first();

        $status = 'Publish';
        $artikel = Artikel::where('kategori_id', $artslug->id)->where('status_publish', $status)->latest()->paginate(8);
        // artikel()->latest()->where('status_publish', $status)->paginate(8);
        // dd($artikel);
        
        $kategori = Kategori::all();
        return view('home/news', compact('ktgrnya','artikel', 'kategori'));
    }

    // public function caritag($tagnya)
    // {
    //     // dd($tagnya);
    //     $tag = Tag::where('slug', $tagnya)->first();
    //     // dd($tag->id);
        
    //     $status = 'Publish';
    //     $artikel = DetailArtikel::where('tag_id', $tag->id)->get();
        
    //     $kategori = Kategori::all();
    //     // dd($kategori);
    //     return view('home/asu', compact('tag','kategori','artikel'));
    // }
    public function caritag(Tag $tagnya)
    {
        $artikel = $tagnya->artikel_detail()->latest()->paginate(8);
        // dd($artikel);

        $tag = Tag::where('slug', $tagnya->id)->first();
        // dd($tag);
        
        // $status = 'Publish';
        // $artikel = DetailArtikel::where('tag_id', $tag->id)->get();
        // dd($artikel);
        
        $kategori = Kategori::all();
        // dd($kategori);
        return view('home/asu', compact('tagnya','kategori','artikel'));
    }
}
