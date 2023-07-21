<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriPortfolio;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriportfolio = KategoriPortfolio ::all();
        return view('dashboard.ktgr-portfolio.index', compact('kategoriportfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ktgr-portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [
            'nm_kategori' => 'required',
            'deskripsi' => 'required',

        ]);

        $ktgrportfolio = KategoriPortfolio::create([
            'nm_ktgr' => $request->nm_kategori,
            'slug_portfolio'=> Str::slug($request->nm_kategori),
            'meta_desc'=> $request->deskripsi,
        ]);
        Alert::success(' Succes ', ' Berhasil tambah Data');
        return redirect()-> route('kategori-portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoriportfolio = KategoriPortfolio::find($id);

        return view('dashboard.ktgr-portfolio.edit', compact('kategoriportfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data = $request->all();
        $ubah = KategoriPortfolio::findOrFail($id);
        $ubah->nm_ktgr = $request->kategori;
        $ubah->slug_portfolio = Str::slug($request->kategori);
        $ubah->meta_desc = $request->deskripsi;
        $ubah->update();
        
        Alert::success(' Succes ', ' Berhasil Update Data');
        return redirect()-> route('kategori-portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ktgrportfolio = KategoriPortfolio::find($id);

        $ktgrportfolio->delete();

        Alert::success(' Sukses ', ' Berhasil Hapus Data Kategori');
        return redirect()-> route('kategori-portfolio.index');
    }
}
