@extends('dashboard.layouts.isi')

@section('isi')

<div class="content-wrapper" style="min-height: 375.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Tag <i>{{ $tag->nm_tag }}</i> </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('tag.index')}}">Tag</a></li>
                        <li class="breadcrumb-item active">Edit Data Tag</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <br>
    <form method="POST" class="form-horizontal" action="{{ route('tag.update', $tag->id) }}" id="form1">
        @csrf
        @method('PUT')
        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="row">


                        <div class="col-xl-9 col-lg-12">
                            <!-- Data Pribadi -->
                            <div class="card mb-4">
                                <div class="card-header py-12">
                                    <h6 class="m-0 font-weight-bold text-primary">Isi Form</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="helperText">Tag<span class="text-danger">&nbsp;*</span></label>
                                        <input type="text" id="helperText" class="form-control" name="nama_tag" value="{{ $tag->nm_tag }}" required>
                                        <p><small class="text-muted"><i>Masukkan Tag yang akan di edit.</i></small></p>
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
                                        <a class="btn btn-danger btn-submit" data-toggle="modal" data-target="#modal-kembali">Batal</a>
                                        <a class="btn btn-primary btn-submit float-md-right" data-toggle="modal" data-target="#modal-simpan"> Simpan</a>
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
                                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                                        <input type="submit" class="btn btn-primary btn-sm float-md-right" name="simpan" value="Simpan">
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
                                        <p>Apa anda tidak akan menyimpan perubahan data ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                                        <a href="{{ route('tag.index')}}" class="btn btn-primary btn-sm float-md-right">Ya, Jangan simpan</a>
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