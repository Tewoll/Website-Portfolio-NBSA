


@extends('dashboard.layouts.isi')

@section('isi')

<div class="content-wrapper" style="min-height: 375.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                        <li class="breadcrumb-item active">Artikel</li>
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
                                <a href="{{ route('artikel.create') }}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-nbsa" class="table table-bordered table-hover">
                                    <thead class="text-center">
                                        <tr>
                                            <th style="width:5%;">No</th>
                                            <th>Judul</th>
                                            <th>Slug</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                            <!-- <th>Publisher</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($artikel as $row)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $row->judul }}</td>
                                            <td>{{ $row->slug }}</td>
                                            <td class="text-center">{{ $row->kategori->nama_kategori }}</td>
                                            <td class="text-center">{{ $row->status_publish }}</td>
                                            <!-- <td>{{ $row->user->name }}</td> -->
                                            
                                            <td class="text-center">
                                                <!-- <a href="#" class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-lihat" title="Lihat"><i class="fa fa-eye"></i> </a> -->
                                                <a href="{{ route('artikel.edit', $row->id) }}" class="btn btn-xs btn-warning" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                                                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapus{{$row->id}}" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
                                                @if ($row->status_publish == 'Draft')
                                                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-publish-{{$row->id}}" title="Publish"><i class="fa fa-arrow-right"></i> Publish</a>
                                                <div class="modal fade" id="modal-publish-{{$row->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Publish Data</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Yakin Publish Artikel "{{$row->judul}}"?</p>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>                                          
                                                                    <a href="{{ route('artikel.show', $row->id) }}" class="btn btn-sm btn-danger">Publish</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                    
                                                @endif
                                            </td>
                                        </tr>
                                        <!-- Modal  -->
                                        <div class="modal fade" id="modal-hapus{{$row->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Konfirmasi hapus data</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apa anda menghapus data {{$row->id}}?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                                                        
                                                        <form action="{{ route('artikel.destroy', $row->id) }}" method="post" class="d-inline">
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

</div>

@endsection