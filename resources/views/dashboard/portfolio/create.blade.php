@extends('dashboard.layouts.isi')

@section('isi')
    <div class="content-wrapper" style="min-height: 375.4px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Portfolio</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                            <li class="breadcrumb-item active">Tambah Portfolio Portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <form method="POST" class="form-horizontal" action="{{ route('portfolio.store') }}" id="form1" enctype="multipart/form-data">
            @csrf
            <section class="content">
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-xl-9 col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-header py-12">
                                        <h6 class="m-0 font-weight-bold text-primary">Isi Form</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Proyek</label>
                                            <input type="text" id="helperText" class="form-control form-control-border"
                                                name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori Proyek</label>
                                            <select class="form-control form-control-border" name="kategori_id" required>
                                                <option value="" disabled selected>Pilih Item</option>

                                                @foreach ($kategori as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->nm_ktgr }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Lokasi Proyek</label>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-6">
                                                    <select class="form-control select2bs4 form-control-border" name="kota_id" required>
                                                        <option value="" disabled selected>Pilih Kota</option>
                                                        @foreach ($kota as $kt)
                                                        <option value="{{ $kt->id }}">{{ $kt->nm_kota }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-12 col-lg-6">
                                                    <select class="form-control select2bs4 form-control-border" name="prov_id" required>
                                                        <option value="" disabled selected>Pilih Provinsi</option>
                                                        @foreach ($prov as $pr)
                                                        <option value="{{ $pr->id }}">{{ $pr->nm_provinsi }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" id="helperText" class="form-control form-control-border"
                                                name="deskripsi" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-6">
                                                    <div class="custom-file mt-2 mb-4">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                            name="foto" accept="image/jpg, image/jpeg, image/png"
                                                            onchange="updatePreview(this, 'image-preview')">
                                                        <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-6">
                                                    <div class="text-center mt-2 mb-4">
                                                        <img id="image-preview" style="width:100px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4">
                                                    <label>Lama Proyek (Bulan)</label>
                                                    <input type="text" id="helperText" class="form-control form-control-border"
                                                        name="lama" required>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <label>Tahun Mulai</label>
                                                    <div class="input-group date" id="pilihtahun1"
                                                        data-target-input="nearest">
                                                        <input type="text"
                                                            class="form-control  form-control-border datetimepicker-input"
                                                            data-target="#pilihtahun1"
                                                            data-toggle="datetimepicker" name="mulai"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12 col-lg-4">
                                                    <label>Tahun Selesai</label>
                                                    <div class="input-group date" id="pilihtahun2"
                                                        data-target-input="nearest">
                                                        <input type="text"  name="selesai"
                                                            class="form-control  form-control-border datetimepicker-input"
                                                            data-target="#pilihtahun2"
                                                            data-toggle="datetimepicker"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-12 fixed">
                                <div class="card mb-3">
                                    <div class="card-header py-12">
                                        <h2 class="h6 m-0 font-weight-bold text-primary">Pengaturan</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <a class="btn btn-danger btn-submit"
                                                href="{{ route('portfolio.index') }}">Batal</a>
                                            <a class="btn btn-primary btn-submit float-md-right" data-toggle="modal"
                                                data-target="#modal-simpan"> Simpan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal  -->
                            <div class="modal fade" id="modal-simpan">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Konfirmasi simpan data</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apa anda akan menyimpan perubahan data ?</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default btn-sm"
                                                data-dismiss="modal">Batal</button>
                                            <input type="submit" class="btn btn-primary btn-sm float-md-right"
                                                name="simpan" value="Simpan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
