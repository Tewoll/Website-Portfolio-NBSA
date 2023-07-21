<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\DetailArtikel;
use App\Models\Tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Toaster;
use RealRashid\SweetAlert\Facades\Alert;

class DetailArtikelTagController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $id= $request->artikel_id;
        $tag = $request->tag_id;
        // dd($tag);
        $detail = DetailArtikel::where('artikel_id', $id)->where('tag_id', $tag)->first();
        //dd($detail);
        if ($detail != null) {
            Alert::error('Tag Sudah Digunakan!');
            return redirect()->back();
        }else{
            // dd($id,$tag);
            $model= new DetailArtikel();
            $model->artikel_id=$id;
            $model->tag_id=$tag;
            $model->save();
            Alert::success('Berhasil Tambah Tag!');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        
        $detail = DetailArtikel::findOrFail($id);
        // dd($detail);
        $detail->forceDelete();

        Alert::success('Berhasil','Tag dihapus!');
        return redirect()->back();
    }
}
