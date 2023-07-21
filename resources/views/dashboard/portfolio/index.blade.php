

@extends('dashboard.layouts.isi')

@section('isi')

<div class="content-wrapper">
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Portfolio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                        <li class="breadcrumb-item active">Portfolio</li>
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
                                <a href="{{ route('portfolio.create') }}" class="btn btn-outline-primary btn-sm">Tambah Portfolio</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-nbsa" class="table table-bordered table-hover">
                                    <thead class="text-center">
                                        <tr>
                                            <th style="width:5%;">No</th>
                                            <th>Nama Proyek</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Foto</th>
                                            <th style="width:10%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolio as $row)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td class="text-center">{{ $row->kategori->nm_ktgr }}</td>
                                            <td>{{ $row->deskripsi }}</td>
                                            <td class="text-center"><img src="{{ asset('storage/'.$row->foto) }}"
                                                class="img-fluid mb-2" alt="{{ $row->foto }}" width="100px" /></td>
                                            
                                            <td class="text-center">
                                                <!-- <a href="{{ route('gallery.show', $row->id) }}" class="btn btn-xs btn-outline-info"><i class="fa fa-eye"></i></a> -->
                                                <a href="{{ route('portfolio.edit', $row->id) }}" class="btn btn-xs btn-outline-primary"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-xs btn-outline-danger" data-toggle="modal" data-target="#modal-hapus"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modal-lihat">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Lihat Data</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="text-align: center;">Nak Jingok Apo Kau?<br>Katek Apo-apo Disini!!!</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-default btn-sm " data-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="modal-hapus">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Konfirmasi hapus data</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apa anda menghapus data ?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                                                        
                                                        <form action="{{ route('portfolio.destroy', $row->id) }}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

</div>

@endsection