@extends('dashboard.layouts.isi')

@section('isi')

<div class="content-wrapper" style="min-height: 375.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('artikel.index')}}">Artikel</a></li>
                        <li class="breadcrumb-item active">Tambah Artikel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <br>
    <form method="POST" class="form-horizontal" action="{{ route('artikel.store') }}" id="form1"
        enctype="multipart/form-data">
        @csrf
        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-9 col-lg-12">
                            <!-- Data Pribadi -->
                            <div class="card mb-2">
                                <div class="card-header py-12">
                                    <h6 class="m-0 font-weight-bold text-primary">Judul Artikel</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" id="helperText" class="form-control" name="judul" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-outline card-info">
                                <div class="card-header py-12">
                                    <h6 class="m-0 font-weight-bold text-primary">Isi Konten</h6>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea id="summernote"class="form-control" name="body"
                                            placeholder="Enter ..." required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-12 text-sm">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="helperText">Simpan</label>
                                        <select class="form-control" style="width: 100%;" name="status_publish" required>
                                            <option selected="selected">Draft</option>
                                            <option>Publish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="helperText">Kategori</label>
                                        <select class="form-control" name="kategori_id" style="width: 100%;" required>
                                        <option value="" disabled selected>Pilih</option>
                                            @foreach ($kategori as $ktgr)
                                            <option value="{{ $ktgr->id }}">{{ $ktgr->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tag</label>
                                        <select class="select2bs4" name="tag_id[]" multiple="multiple" data-placeholder="Select a State"
                                            style="width: 100%;" required>
                                            @foreach ($tag as $keyword)
                                            <option value="{{ $keyword->id }}">{{ $keyword->nm_tag }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="helperText">Gambar Artikel</h6><br>
                                        <div class="custom-file mt-2">
                                            <input type="file" class="custom-file-input" id="customFile"
                                                name="gambar_artikel" accept="image/jpg, image/jpeg, image/png"
                                                onchange="updatePreview(this, 'image-preview')" required>
                                            <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                        </div>
                                        <div class="text-center mt-3">
                                            <img id="image-preview" style="width:200px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header py-12">
                                    <h2 class="h6 m-0 font-weight-bold text-primary">Pengaturan</h2>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <a class="btn btn-danger btn-submit" data-toggle="modal"
                                            data-target="#modal-kembali">Batal</a>
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
                                        <p>Apa anda akan menyimpan data ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default btn-sm"
                                            data-dismiss="modal">Batal</button>
                                        <input type="submit" class="btn btn-primary btn-sm float-md-right" name="simpan"
                                            value="Simpan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal-kembali">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi simpan data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apa anda tidak akan menyimpan data ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default btn-sm"
                                            data-dismiss="modal">Batal</button>
                                        <a href="{{ route('artikel.index')}}"
                                            class="btn btn-primary btn-sm float-md-right">Ya, Jangan simpan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal -->
                    </div>
                </div>
            </div>
        </section>

    </form>
    <!-- /.content -->
</div>

@endsection