<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriPortfolio;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Portfolio
        $portfolio = Portfolio::latest()->take(2)->get();
        $kategori = KategoriPortfolio::all();
        // dd($portfolio);
        
        $p = Portfolio::all();
        $jumlah_p = count($p);
        // $lok = Lokasi::all();
        // $kota = Kota::all();
        // $prov = Provinsi::all();

        // Artikel
        $status = 'Publish';
        $artikel = Artikel::orderBy( 'id', 'Desc')->where('status_publish', $status)->take(2)->get();
        
        // dd($artikel);

        $a = Artikel::all()->where('status_publish', $status);
        $jumlah_a = count($a);
        
        return view('home/nbsa-home', compact('portfolio','kategori','artikel','jumlah_a','jumlah_p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
