@extends('home.layouts.main')

@section('main')
<div class="container-fluid mt-5 pt-5 p-0">
    <div class="row g-0 mt-n3">
        <div class="col-lg-12 col-xl-12 position-relative overflow-hidden pb-5 pt-4 px-3 px-xl-4 px-xxl-5">
            <nav class="mb-3 pt-md-2" aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{ __('navbar.home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('navbar.port') }}</li>
                </ol>
            </nav>
            <div class="d-sm-flex align-items-center justify-content-between pb-3 pb-sm-4">
                <h1 class="h2 mb-sm-0">{{ __('navbar.port') }} {{ $portslugs }}</h1>
            </div>
            <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch my-2">
                <label class="fs-sm me-2 pe-1 text-nowrap mb-2 mb-md-0"><i class="fi-filter text-muted mt-n1 me-2"></i>Filter by:</label>

                <div class="d-flex align-items-center flex-shrink-0">
                    <ul class="nav nav-tabs mb-0">
                        <li class="nav-item mb-2 mb-md-0"><a class="nav-link" href="/project">{{ __('project.all') }}</a></li>
                        @foreach ($kategori as $ktgr)
                        <li class="nav-item mb-2 mb-md-0"><a class="nav-link" href="{{ route('kategorinya', $ktgr->slug_portfolio) }}">{{ $ktgr->nm_ktgr}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <hr class="d-none d-sm-block w-100 mx-4">
                <div class="d-none d-sm-flex align-items-center flex-shrink-0 text-muted"><i class="fi-check-circle me-2"></i><span class="fs-sm mt-n1">{{ $portfolio->total() }} {{ __('project.result') }}</span></div>
            </div>
            <!-- Catalog grid-->
            <div class="row g-4 py-4">
                <!-- Item-->
                @foreach ($portfolio as $project)

                <div class="col-sm-6 col-xl-3">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <a class="nav-link stretched-link" href="{{ route('lihat', $project->slug) }}">
                            <div class="tns-carousel-wrapper card-img-top">
                                <img src="{{ asset('storage/'.$project->foto) }}" alt="{{$project->foto}}">
                            </div>
                            <div class="card-body position-relative pb-3">
                                <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">{{ $project->kategori->nm_ktgr }}</h4>
                                <h3 class="h6 mb-2 fs-base">{{ $project->nama }}</h3>
                                <p class="fs-xs opacity-70"><i class="fi-map-pin me-1"></i>{{ $project->lokasi->kota->nm_kota }},
                                    {{ $project->lokasi->prov->nm_provinsi }}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                @endforeach
            </div>
            <br>
            <div class="d-flex justify-content-center">
                {!! $portfolio->links() !!}
            </div>
        </div>
    </div>
    <hr class="mb-5" />
</div>

<!-- Contact us-->

<section class="container position-relative zindex-1 mb-4">
    <div class="bg-secondary rounded-3 px-3 py-5">
        <div class="text-center py-sm-3 py-md-5">
            <h3 class="h5 fw-normal">{{ __('footer.iklan')}}</h3>
            <h2 class="pb-4">{{ __('footer.usnow')}}</h2><a href="https://wa.link/r2mnnh" class="btn btn-lg button-contact" target="_blank" style="vertical-align:middle"><i class="fi-whatsapp" style="font-size: 17px; padding-right: 5px"></i><span>Whatsapp</span></a>
        </div>
    </div>
</section>
@endsection