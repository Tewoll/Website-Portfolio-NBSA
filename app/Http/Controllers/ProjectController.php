<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\KategoriPortfolio;
use App\Models\Kota;
use App\Models\Lokasi;
use App\Models\Portfolio;
use App\Models\Provinsi;
use Illuminate\Http\Request;

use function PHPUnit\Framework\callback;

class ProjectController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::latest()->paginate(8);
        $kategori = KategoriPortfolio::all();
        $portslugs = '';
        
        return view('home/project', compact('portslugs','portfolio','kategori'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($slug)
    {
        $lihat = Portfolio::where('slug', $slug)->first();
        // dd($lihat);
        $idnya = $lihat->id;
        //dd($id_artikel);
        
        $ktgr = KategoriPortfolio::where('id', $lihat->kategori_portfolio_id)->first();
        
        $detail = Gallery::all()->where('project_id', $idnya);

        $lok = Lokasi::where('id', $lihat->lokasi_id)->first();
        $kota = Kota::where('id', $lok->kota_id)->first();
        $prov = Provinsi::where('id', $lok->provinsi_id)->first();
        // dd($lok, $kota, $prov);

        $created_po = array();
        $challan = Portfolio::where('slug', $slug)->get();
        // dd($challan);
        foreach ($challan as $rec){
            $created_po[] = array_push($created_po, $rec->id);
        }
        $lain = Portfolio::whereNotIn('id',$created_po)->orderBy('created_at','asc')->get();
        //dd($data);
        return view('home/portfolio-show', compact('lihat','ktgr','detail','lok','kota','prov','lain'));
    }

    public function cariKategori($slug_portfolio)
    {
        $portslug = KategoriPortfolio::where('slug_portfolio', $slug_portfolio)->first();
        $portfolio = Portfolio::where('kategori_portfolio_id', $portslug->id)->latest()->paginate(8);
        //dd($portfolio);
        $kategori = KategoriPortfolio::all();
        $portslugs = ' : '.$portslug->nm_ktgr;
        
        return view('home/project', compact('portslugs','portfolio', 'kategori'));
    }
}
