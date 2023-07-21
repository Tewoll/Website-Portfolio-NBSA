@extends('dashboard.layouts.isi')

@section('isi')

<div class="content-wrapper" style="min-height: 375.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1 class="m-0">Edit Artikel :</h1>
                    <p class="text-lg"><b>{{ $artikel->judul }}</b></p>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('artikel.index')}}">Artikel</a></li>
                        <li class="breadcrumb-item active">Edit Artikel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="modal fade x1-example-modal-md" id="asuModal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" weight="100%">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Tag </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('detail-artikel-tag') }}" method="post">
                            <input type="text" class="form-control" name="artikel_id" value="{{$artikel->id}}" hidden>
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tag</label>
                                        <select class="form-control select2detail" style="width: 100%;" name="tag_id">
                                            @foreach ($tag as $key=>$value )
                                            <option value="{{ $value->id}}">{{ $value->nm_tag}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <ol class="float-sm-right">
                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                    </ol>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <br>
    <form method="POST" class="form-horizontal" action="{{ route('artikel.update', $artikel->id) }}" id="form1" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                                        <input type="text" id="helperText" class="form-control" name="judul"
                                            value="{{ $artikel->judul }}" required>
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
                                        <textarea id="summernote"
                                            name="body">{!! html_entity_decode($artikel->body) !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-12 text-sm">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="helperText">Simpan</label>
                                        <select class="form-control" style="width: 100%;" name="status_publish">
                                            @if ($artikel->status_publish == 'Draft')
                                            <option selected="selected">Draft</option>
                                            <option>Publish</option>
                                            @else
                                            <option>Draft</option>
                                            <option selected="selected">Publish</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="helperText">Kategori</label>
                                        <select class="form-control" name="kategori_id" style="width: 100%;">
                                            <option value="" disabled selected>Pilih</option>
                                            @foreach ($kategori as $ktgr)
                                            <option {{ $ktgr->id == $artikel->kategori_id ? 'selected' : '' }}
                                                value="{{ $ktgr->id }}">{{ $ktgr->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div><?php
                                            $gmbr = $artikel->gambar_artikel;
                                            ?>
                                    @if (empty($gmbr))
                                    <div class="form-group">
                                        <label for="helperText">Gambar Artikel</h6><br>
                                            <div class="custom-file mt-2">
                                                <input type="file" class="custom-file-input" id="customFile"
                                                    name="gambar_artikel" accept="image/jpg, image/jpeg, image/png"
                                                    onchange="updatePreview(this, 'image-preview')">
                                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                            </div>
                                            <div class="text-center mt-3">
                                                <img id="image-preview" style="width:200px">
                                            </div>
                                    </div>
                                    @else
                                    <div class="form-group">
                                        <label for="helperText">Gambar Artikel Sebelumnya</label><br>
                                        <div class="col-sm-4">
                                            <input type="hidden" value="{{$gmbr}}" name="gambar_lama">
                                            <img src="{{ asset('storage/'.$artikel->gambar_artikel) }}"
                                                class="thumb-sm" width="200" height="200" />
                                        </div>
                                        <br />
                                        <label for="helperText">Gambar Artikel Baru</h6><br>
                                        <div class="custom-file mt-2">
                                            <input type="file" class="custom-file-input" id="customFile"
                                                name="new_gambar" accept="image/jpg, image/jpeg, image/png"
                                                onchange="updatePreview(this, 'image-preview')">
                                            <label class="custom-file-label" for="customFile">Pilih
                                                Gambar</label>
                                        </div>
                                        <div class="text-center mt-3">
                                            <img id="image-preview" style="width:200px">
                                        </div>
                                    </div>
                                    @endif
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
                                            <p>Apa anda akan menyimpan Artikel?</p>
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
                                            <button type="button" class="btn btn-default btn-sm"
                                                data-dismiss="modal">Batal</button>
                                            <a href="{{ route('artikel.index')}}"
                                                class="btn btn-primary btn-sm float-md-right">Ya, Jangan simpan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->

    </form>

    <div class="card mb-2">
        <div class="card-header  py-12">
            <h6 class="m-0 font-weight-bold text-primary">Tag</h6>
        </div>
        <div class="card-body">
            <ol class="float-sm-right mb-2">
                <a type="submit" class="btn btn-success btn-xs" data-toggle="modal"
                    data-target=".x1-example-modal-md"><i class="fas fa-plus"></i> Tambah Tag</a>
            </ol>
            <table class="table">
                <tbody>
                    @foreach ($detail as $row)
                    <tr>
                        <td>{{ $row->tag->nm_tag }}</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-danger" data-toggle="modal"
                                data-target="#modal-hapusTag-{{ $row->id }}" title="Hapus"><i class="fa fa-trash"></i>
                            </a>
                            <div class="modal fade" id="modal-hapusTag-{{ $row->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Konfirmasi hapus data</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Hapus Tag "{{$row->tag->nm_tag}}"?</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>

                                            <form action="{{ route('detail-artikel-tag.destroy', [$row->id]) }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>

<!-- /.content -->
</div>

@endsection