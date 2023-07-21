@extends('dashboard.layouts.isi')

@section('isi')

<div class="content-wrapper" style="min-height: 375.4px;">
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Tag</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/belakang">Home</a></li>
                        <li class="breadcrumb-item active">Tag</li>
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
                                <a href="{{ route('tag.create') }}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- @if(Session::has('succes'))
                                    <div class="alert alert-danger alert-dismissible fade show col-lg-6" role="alert">
                                        {{ Session('succes') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif -->
                            <div class="table-responsive">
                                <table id="table-nbsa" class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:5%;">No</th>
                                            <th>Tag</th>
                                            <th style="width:15%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tag as $row)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $row->nm_tag }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('tag.edit', $row->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapus"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
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
                                                        <p>Apa anda yakin akan menghapus data "{{$row->nm_tag}}"?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                                                        
                                                        <form action="{{ route('tag.destroy', $row->id) }}" method="post" class="d-inline">
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