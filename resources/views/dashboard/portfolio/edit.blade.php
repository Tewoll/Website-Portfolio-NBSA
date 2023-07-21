@extends('dashboard.layouts.isi')

@section('isi')
<div class="content-wrapper" style="min-height: 375.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Portfolio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                        <li class="breadcrumb-item active">Edit Portfolio Portfolio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Modal Tambah Foto -->
    <div class="modal fade x3-example-modal-md" id="asuModal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" weight="100%">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Foto Project</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <Form method="POST" action="{{ url('gallery') }}" id="form-example-2" enctype="multipart/form-data">
                        <input type="text" class="form-control" name="portfolio_id" value="{{$portfolio->id}}" hidden>
                        @csrf
                        <!-- <div class="form-group">
                            <div class="input-group control-group increment">
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button"><i
                                            class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                            </div>
                            <div class="clone d-none hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button"><i
                                                class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="user-image mb-3 text-center">
                                <div class="imgPreview"> </div>
                            </div>            
                            <div class="custom-file">
                                <input type="file" name="imageFile[]" class="custom-file-input" id="files" multiple="multiple" accept="image/jpg, image/jpeg, image/png">
                                <label class="custom-file-label" for="images">Choose image</label>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                            <ol class="float-sm-right">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </ol>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-5">
                                    <div class="float-left">
                                        <h3><b>Detail</b></h3>
                                        Nama Portfolio : <b>{{ $portfolio->nama }}</b><br />
                                        Lokasi : <b>{{ $kota->nm_kota }}, {{ $prov->nm_provinsi }}</b><br />
                                        Kategori : <b>{{ $portfolio->kategori->nm_ktgr }}</b><br />                                    
                                        Deskripsi : <b>{{ $portfolio->deskripsi }}</b><br />
                                        Lama Proses : <b>{{ $portfolio->lama }} Bulan</b><br />
                                        Tahun Mulai : <b>{{ $portfolio->mulai }}</b><br />
                                        Tahun Selesai : <b>{{ $portfolio->selesai }}</b></p>
                                    </div>
                                    <div class="float-right text-sm">
                                        <button class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                            data-target=".x2-example-modal-lg">Edit Deskripsi</button>
                                        <div class="modal fade x2-example-modal-lg" id="editModal" tabindex="-1"
                                            role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
                                            weight="100%">
                                            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Project : <b>{{ $portfolio->nama }}</b></h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <Form method="POST" class="form-horizontal" action="{{ route('portfolio.update', $portfolio->id) }}" id="form1"  enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" class="form-control form-control-border" name="lokasi_id" value="{{ $lok->id }}">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Nama Project</label>
                                                                    <input type="text" class="form-control form-control-border" name="nama" value="{{ $portfolio->nama }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Kategori Portfolio</label>
                                                                    <select class="form-control form-control-border select" name="kategori"
                                                                        style="width: 100%;">
                                                                        <option disabled selected>Pilih Kategori</option>
                                                                        @foreach ($ktgr as $kategori)
                                                                        <option {{ $kategori->id == $portfolio->kategori_portfolio_id ? 'selected' : '' }}
                                                                            value="{{ $kategori->id }}">{{ $kategori->nm_ktgr }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text"
                                                                class="col-form-label">Deskripsi</label>
                                                            <textarea class="form-control" name="deskripsi">{{ $portfolio->deskripsi }}</textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Kota</label>
                                                                    <select class="form-control form-control-border select2edit" name="kota"
                                                                        style="width: 100%;">
                                                                        <option disabled selected>Pilih Kota</option>
                                                                        @foreach ($kot as $kt)
                                                                        <option {{ $lok->kota_id == $kt->id ? 'selected' : '' }}
                                                                            value="{{ $kt->id }}">{{ $kt->nm_kota }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Provinsi</label>
                                                                    <select class="form-control form-control-border select2edit" name="prov"
                                                                        style="width: 100%;">
                                                                        <option disabled selected>Pilih Provinsi</option>
                                                                        @foreach ($pro as $pr)
                                                                        <option {{ $lok->provinsi_id == $pr->id ? 'selected' : '' }}
                                                                            value="{{ $pr->id }}">{{ $pr->nm_provinsi }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Lama Proses (Bulan)</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-border" value="{{ $portfolio->lama }}" name="lama" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Tahun Mulai</label>
                                                                    <div class="input-group date" id="pilihtahun1"
                                                                        data-target-input="nearest">
                                                                        <input type="text"
                                                                            class="form-control form-control-border datetimepicker-input"
                                                                            data-target="#pilihtahun1"
                                                                            data-toggle="datetimepicker" value="{{ $portfolio->mulai }}" name="mulai" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Tahun Selesai</label>
                                                                    <div class="input-group date" id="pilihtahun2"
                                                                        data-target-input="nearest">
                                                                        <input type="text"
                                                                            class="form-control form-control-border datetimepicker-input"
                                                                            data-target="#pilihtahun2"
                                                                            data-toggle="datetimepicker"  value="{{ $portfolio->selesai }}" name="selesai" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-12">
                                                                <label>Gambar Sebelumnya</label><br>
                                                                    <img src="{{ asset('storage/'.$portfolio->foto) }}"
                                                                        class="thumb-sm" style="width:100px"/>
                                                                </div>
                                                                <div class="col-md-12 col-lg-6">
                                                                <label>Pilih Foto Baru</label>
                                                                    <div class="custom-file mt-2 mb-4 text-center">
                                                                        <input type="file" class="custom-file-input" id="customFile"
                                                                            name="foto" accept="image/jpg, image/jpeg, image/png"
                                                                            onchange="updatePreview(this, 'image-preview')">
                                                                        <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-lg-4">
                                                                    <label>Preview Foto Baru</label>
                                                                    <div class="mt-2 mb-4">
                                                                        <img id="image-preview" style="width:100px">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default btn-sm"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit"
                                                            class="btn btn-sm btn-primary">Simpan</button>
                                                            
                                                        </Form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 offset-4">
                                    <div class="float-right">
                                        <h3><b>Cover :</b></h3>
                                        <img src="{{ asset('storage/'.$portfolio->foto) }}"
                                                class="img-fluid mb-2" alt="{{ $portfolio->foto }}" width="250px" />
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <!-- <div class="btn-group w-100 mb-2">
                                        <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
                                    </div> -->
                                <div class="mb-2">
                                    <div class="float-right">
                                        <button class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                            data-target=".x3-example-modal-md"> Tambah Foto</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="filter-container p-0 row">
                                    @foreach ($gallery as $data)
                                    <div class="filtr-item col-sm-2">
                                        <a href="{{ asset('storage/'.$data->file_resource) }}"
                                            data-toggle="lightbox" data-title="{{ $portfolio->nama}}">
                                            <img src="{{ asset('storage/'.$data->file_resource) }}"
                                                class="img-fluid mb-2" alt="{{$portfolio->nama}}" />
                                        </a>
                                        <a class="btn btn-danger btn-xs btn-block" data-toggle="modal"
                                            data-target="#modal-hapusFoto-{{ $data->id }}" title="Hapus"><i class="fa fa-trash"></i>
                                        </a>
                                        <div class="modal fade" id="modal-hapusFoto-{{ $data->id }}">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Konfirmasi</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <p>Hapus Foto "{{$portfolio->nama}}"?</p>
                                                        <img src="{{ asset('storage/'.$data->file_resource) }}"
                                                class="img-fluid mb-2" alt="{{$portfolio->nama}}" width="250px"/>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>

                                                        <form action="{{ route('gallery.destroy', [$data->id]) }}"
                                                            method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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