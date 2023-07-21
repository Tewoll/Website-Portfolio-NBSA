@extends('dashboard.layouts.isi')

@section('isi')
    <div class="content-wrapper" style="min-height: 375.4px;">
        @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Kategori Portfolio</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                            <li class="breadcrumb-item active">Kategori Portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-2">
                                    <a href="{{ route('kategori-portfolio.create') }}" class="btn btn-outline-primary btn-sm">Tambah
                                        Data</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table-nbsa" class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="width:5%;">No</th>
                                                <th>Kategori Proyek</th>
                                                <th>Deskripsi</th>
                                                <th style="width:10%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kategoriportfolio as $row)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $row->nm_ktgr }}</td>
                                                    <td>{{ $row->meta_desc }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('kategori-portfolio.edit', $row->id) }}"
                                                            class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-xs btn-danger" data-toggle="modal"
                                                            data-target="#modal-hapus"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- Modal  -->
                                                <div class="modal fade" id="modal-lihat">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Lihat Data</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p style="text-align: center;">Nak Jingok Apo Kau?<br>Katek
                                                                    Apo-apo Disini!!!</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-default btn-sm "
                                                                    data-dismiss="modal">Batal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-hapus">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Konfirmasi hapus data</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Apa anda menghapus data ?</p>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button class="btn btn-default btn-sm"
                                                                    data-dismiss="modal">Batal</button>

                                                                <form action="{{ route('kategori-portfolio.destroy', $row->id) }}"
                                                                    method="post" class="d-inline">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal -->
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
