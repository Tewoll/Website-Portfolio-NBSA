@extends('dashboard.layouts.isi')

@section('isi')
<div class="content-wrapper" style="min-height: 375.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lihat Portfolio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                        <li class="breadcrumb-item active">Lihat Portfolio Portfolio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="mb-2">
                                <div class="float-left">
                                    <h3><b>Detail</b></h3>
                                    Nama Portfolio : <b>{{ $portfolio->nama }}</b><br />
                                    Kategori Portfolio : <b>{{ $portfolio->kategori->nama_kategori }}</b><br />                                    
                                    Deskripsi Portfolio : <b>{{ $portfolio->deskripsi }}</b><br />
                                    Tahun Mulai : <b>{{ $portfolio->mulai }}</b><br />
                                    Tahun Selesai : <b>{{ $portfolio->selesai }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="filter-container p-0 row">
                                    @foreach ($gallery as $datas)
                                        
                                    <div class="filtr-item col-sm-2">
                                        <a href="{{ asset('storage/'.$datas->file_resource) }}"
                                            data-toggle="lightbox" data-title="{{ $portfolio->nama}}">
                                            <img src="{{ asset('storage/'.$datas->file_resource) }}"
                                                class="img-fluid mb-2" alt="{{$portfolio->nama}}" />
                                        </a>
                                    </div>
                                    
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="{{ route('portfolio.index') }}" class="btn btn-danger btn-sm float-right"
                                v-delete-confirm:form-delete-album>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection