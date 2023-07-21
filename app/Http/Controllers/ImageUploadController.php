<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\KategoriPortfolio;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\ImageManager;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $validateImageData = $request->validate([
            
            'portfolio_id' => 'required',
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif'
        ]);
        if($request->hasfile('imageFile'))
        {
            foreach($request->file('imageFile') as $key => $file)
            {
                
                $path = $file->store('images/portfolio', 'public');
                $name = $request->portfolio_id;
                $insert[$key]['project_id'] = $name;
                $insert[$key]['file_resource'] = $path;
            }
        }
        Gallery::insert($insert);
        
        Alert::success(' Succes ', ' Berhasil Tambah Portfolio');
        return back(); 
    }

    public function show($id)
    {
        $portfolio = Portfolio::find($id);
        $ktgr = KategoriPortfolio::all();
        $gallery = Gallery::select('id','project_id','file_resource')->where('project_id', $id)->get();
        
        return view('dashboard.gallery.show', compact('portfolio','ktgr', 'gallery'));
    }

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
        $detail = Gallery::findOrFail($id);
        Storage::delete('public/'. $detail->file_resource);
        // dd($detail);
        $detail->forceDelete();

        Alert::success('Berhasil','Foto dihapus!');
        return redirect()->back();
    }
}
