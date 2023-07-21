@extends('home.layouts.main')

@section('main')

<section class="container mt-5 mb-md-2 py-5">
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">{{ __('navbar.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/project">{{ __('navbar.port') }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $lihat->nama }}
            </li>
        </ol>
    </nav>
    <h1 class="h2 mb-2">{{ $lihat->nama }}</h1>
    <p class="mb-2 pb-1 fs-lg"> </p>
    <!-- Features + Sharing-->
    <div class="d-flex justify-content-between align-items-center">
        <div class="text-nowrap">
            <div class="dropdown d-inline-block" data-bs-toggle="tooltip" title="{{ __('project.bagi') }}">
                <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button"
                    data-bs-toggle="dropdown">
                    <i class="fi-share"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end my-1">
                    <a href="https://api.whatsapp.com/send?phone={phone_number}&text={{ route('show', $lihat->slug) }}" class="dropdown-item" type="a">
                        <i class="fi-whatsapp fs-base opacity-75 me-2"></i>Whatsapp
                    </a>
                    <a href="https://www.facebook.com/sharer.php?u={{ route('show', $lihat->slug) }}" class="dropdown-item" type="a">
                        <i class="fi-facebook fs-base opacity-75 me-2"></i>Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ route('show', $lihat->slug) }}" class="dropdown-item" type="a">
                        <i class="fi-twitter fs-base opacity-75 me-2"></i>Twitter
                    </a>
                    <a href="https://linkedin.com/sharing/share-offsite/?url{{ route('show', $lihat->slug) }}" class="dropdown-item" type="a">
                        <i class="fi-linkedin fs-base opacity-75 me-2"></i>LinkedIn
                    </a>
                    <a href="#" class="dropdown-item" type="a">
                        <i class="fi-instagram fs-base opacity-75 me-2"></i>Instagram
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery-->
<section class="container overflow-auto mb-4 ps-lg-5 pe-lg-5" data-simplebar>
    <div class="row g-2 g-md-3 gallery" data-thumbnails="true">
        <div class="col-12 col-lg-12">
            <a class="gallery-item rounded rounded-md-3" href="{{ url(asset('storage/'.$lihat->foto)) }}"
                data-sub-html='&lt;h6 class="fs-sm text-light"&gt;'><img src="{{ asset('storage/'.$lihat->foto) }}"
                    alt="{{$lihat->foto}}" /></a>
        </div>
        @foreach ($detail as $album )
        <div class="col-4 col-lg-3">

            <a class="gallery-item rounded rounded-md-3 mb-2 mb-md-3"
                href="{{ url(asset('storage/'.$album->file_resource)) }}"
                data-sub-html='&lt;h6 class="fs-sm text-light"&gt;'><img
                    src="{{ asset('storage/'.$album->file_resource) }}" alt="{{$album->file_resource}}" /></a>
        </div>
        @endforeach
    </div>
</section>

<!-- Post content-->
<section class="container mb-5 ps-lg-5 pe-lg-5">
    <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-12 col-md-5 ms-lg-auto pb-1">
            <!-- Contact card-->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <span class="badge bg-success me-2 mb-3">{{ __('project.selesai') }}</span>
                    <span class="badge bg-warning me-2 mb-3"><a href="{{ route('kategorinya', $ktgr->slug_portfolio) }}">{{ $ktgr->nm_ktgr }}</a></span>
                </div>
                <div class="card-body">
                    <div class="mb-4 pb-md-3">
                        <h3 class="h4">{{ __('project.overview') }}</h3>
                        <p class="mb-1">
                            {{$lihat->deskripsi}}
                        </p>
                    </div>
                    <!-- Property lihats-->
                    <ul class="list-unstyled mb-0">
                        <li><b><i class="fi-map-pin me-1"></i>{{ $lihat->lokasi->kota->nm_kota }},
                                {{ $lihat->lokasi->prov->nm_provinsi }}</b></li>
                        <li><b>{{ __('project.durasi') }} : </b>{{$lihat->lama}} {{ __('project.bulan') }}</li>
                        <li><b>{{ __('project.mulai') }} : </b>{{$lihat->mulai}}</li>
                        <li><b>{{ __('project.end') }} : </b>{{$lihat->selesai}}</li>
                    </ul>
                </div>
                <div class="card-footer border-top">
                    <ul class="d-flex mb-4 list-unstyled fs-sm">
                        <li class="me-3 pe-3 border-end">
                        {{ __('project.publish') }}: <b>{{ date('F, Y',strtotime($lihat->created_at))}}</b>
                        </li>
                        <!-- <li class="me-3 pe-3">Views: <b>1048</b></li> -->
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</section>

<!-- Recently viewed-->
<section class="container mb-5 ps-lg-5 pe-lg-5">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h4>{{ __('project.recent') }}</h4>
        <a class="btn btn-link fw-normal p-0 mb-3" href="/project">{{ __('project.view') }}<i class="fi-arrow-long-right ms-2"></i></a>
    </div>
    <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2">
        <div class="tns-carousel-inner row gx-4 mx-0 pt-3 pb-4"
            data-carousel-options='{"items": 4, "responsive": {"0":{"items":1},"500":{"items":2},"768":{"items":3},"992":{"items":4}}}'>
            <!-- Item-->
            @foreach ($lain as $rows)
            <div class="col">
                <div class="card shadow-sm card-hover border-0 h-100">
                    <div class="card-img-top card-img-hover">
                        <a class="img-overlay" href="{{ route('lihat', $rows->slug) }}"></a>
                        <img src="{{ asset('storage/'.$rows->foto) }}" alt="{{ $rows->nama }}" />
                    </div>
                    <div class="card-body position-relative pb-3">
                        <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">
                            {{ $rows->kategori->nm_ktgr }}
                        </h4>
                        <h3 class="h6 mb-2 fs-base">
                            <a class="nav-link stretched-link"
                                href="{{ route('lihat', $rows->slug) }}">{{$rows->nama}}</a>
                        </h3>
                        <div class="fs-xs opacity-70"><i
                                class="fi-map-pin me-1"></i>{{ $rows->lokasi->kota->nm_kota }},
                            {{ $rows->lokasi->prov->nm_provinsi }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="container position-relative zindex-1 mb-4">
    <div class="bg-secondary rounded-3 px-3 py-5">
        <div class="text-center py-sm-3 py-md-5">
            <h3 class="h5 fw-normal">{{ __('footer.iklan')}}</h3>
            <h2 class="pb-4">{{ __('footer.usnow')}}</h2><a href="https://wa.link/r2mnnh" class="btn btn-lg button-contact" target="_blank" style="vertical-align:middle"><i class="fi-whatsapp" style="font-size: 17px; padding-right: 5px"></i><span>Whatsapp</span></a>
        </div>
    </div>
</section>
@endsection