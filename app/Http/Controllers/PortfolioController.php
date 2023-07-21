<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\KategoriPortfolio;
use App\Models\Gallery;
use App\Models\Kota;
use App\Models\Lokasi;
use App\Models\Provinsi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio ::all();
        return view('dashboard.portfolio.index', compact('portfolio'));
    }

    public function create()
    {
        $kategori = KategoriPortfolio ::all();
        $kota = Kota ::all();
        $prov = Provinsi ::all();

        return view('dashboard.portfolio.create', compact(
            'kategori','kota','prov'
        ));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        
        // Portfolio::create([
        //     'nama' => $request->portfolio,
        //     'slug' => Str::slug($request->portfolio),
        //     'kategori_portfolio_id' => $request->kategori_id,
        //     'deskripsi' => $request->deskripsi

        // ]);
        
        $lok = new Lokasi();
        $lok->kota_id = $request->kota_id;
        $lok->provinsi_id = $request->prov_id;
        $lok->save();
        
        $id_lok = $lok->id;

        $model = new Portfolio();
        $model->nama = $request->nama;
        $model->slug = Str::slug($request->nama);
        $model->kategori_portfolio_id = $request->kategori_id;
        $model->deskripsi = $request->deskripsi;
        $gambar = $request->file('foto');
        // dd($model);
        if($gambar){
            $path               = $gambar->store('images/portfolio', 'public');
            $model->foto        = $path;
        }
        $model->lokasi_id = $id_lok;
        $model->lama = $request->lama;
        $model->mulai = $request->mulai;
        $model->selesai = $request->selesai;
        $model->save();

        Alert::success(' Succes ', ' Berhasil Tambah Data Portfolio');
        return redirect()-> route('portfolio.index');
    }

    public function show($id)
    {
        //dd($id);
        $model = Portfolio::Find($id);
        return view('dashboard.portfolio.show', compact('model'));
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        $ktgr = KategoriPortfolio::all();
        $kot = Kota::all();
        $pro = Provinsi::all();
        $gallery = Gallery::select('id','project_id','file_resource')->where('project_id', $id)->get();

        $lok = Lokasi::where('id', $portfolio->lokasi_id)->first();
        $kota = Kota::where('id', $lok->kota_id)->first();
        $prov = Provinsi::where('id', $lok->provinsi_id)->first();
        // dd($prov,$kota);
        
        return view('dashboard.portfolio.edit', compact('portfolio','ktgr', 'gallery', 'lok', 'kota', 'prov','kot','pro'));
    }

    public function update(Request $request, $id)
    {
        // $data = $request->all();
        // dd($data);
        $portfolio = Portfolio::findOrFail($id);
        $lokasi = Lokasi::where('id', $request->lokasi_id)->first();
        $lokasi->kota_id = $request->kota;
        $lokasi->provinsi_id = $request->prov;
        $lokasi->save();
        
        $gambar_baru = $request->file('foto');
        // $gambar_lama = $request->gambar_lama;

        $portfolio->nama = $request->nama;
        $portfolio->slug = Str::slug($request->nama);
        $portfolio->kategori_portfolio_id = $request->kategori;
        $portfolio->deskripsi = $request->deskripsi;
        $portfolio->lokasi_id = $request->lokasi_id;
        
        if(!empty($gambar_baru)){
            if($portfolio->foto && file_exists(storage_path('app/public/' . $portfolio->foto))){
                Storage::delete('public/'. $portfolio->foto);
            }
            $gambar_baru_path = $gambar_baru->store('images/portfolio', 'public');

            $portfolio->foto = $gambar_baru_path;
        }
        $portfolio->lama = $request->lama;
        $portfolio->mulai = $request->mulai;
        $portfolio->selesai = $request->selesai;
        $portfolio->save();
        
        Alert::success(' Succes ', ' Berhasil Update Data Portfolio');
        return back();
    }

    public function destroy($id)
    {
        // cari data & hapus galery beserta foto sesuai project
        $foto = Gallery::where('project_id', $id)->get();
        foreach ($foto as $key => $value) {
            $ft = $value->file_resource;
            Storage::delete('public/'. $ft);
        }
        //hapus data gallery
        Gallery::destroy(Gallery::where('project_id', $id)->pluck('id')->all());

        // cari portfolio sesuai perintah ID
        $portfolio = Portfolio::find($id);
        // cari data & hapus lokasi
        $lokasi = Lokasi::where('id', $portfolio->lokasi_id);
        $lokasi->forceDelete();

        // hapus portfolio beserta foto cover yang ada di storage
        Storage::delete('public/'. $portfolio->foto);
        $portfolio->forceDelete();

        Alert::success(' Sukses ', ' Berhasil Hapus Data Portfolio');
        return redirect()-> route('portfolio.index');
    }
}
