@extends('home.layouts.main')

@section('main')

<!-- Page container-->
<div class="container mt-5 mb-md-4 py-5">
    <!-- Breadcrumb + page title-->
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ __('navbar.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">NBSA News</li>
        </ol>
    </nav>
    <h1 class="d-flex align-items-end justify-content-between mb-4">NBSA News</h1>

    <div class="row gy-3 mb-2 pb-2">
        <div class="col-md-12 col-lg-4 order-lg-1 offset-lg-8">
            <div class="position-relative">
                <form class="form" method="get" action="#">
                    <input class="form-control pe-5" type="text" name="search" placeholder="{{ __('footer.carian') }}"><i class="fi-search position-absolute top-50 end-0 translate-middle-y me-3"></i>
                </form>
            </div>
        </div>
    </div>
    <hr class="mb-5" />

    <div class="row row-cols-md-2 row-cols-1 gy-md-5 gy-4 mb-lg-5 mb-4">
        <!-- Article-->
        @foreach ($artikel as $art )
        <article class="col pb-2 pb-md-1">
            <div class="card card-horizontal" style="max-width: 40rem;">
                <div class="card-img-top" style="background-image: url( {{ asset('storage/'.$art->gambar_artikel) }} );"></div>
                <div class="card-body">
                    <a class="fs-sm text-uppercase text-decoration-none" href="{{ route('ktgrnya', $art->kategori->slug) }}">{{ $art->kategori->nama_kategori }}</a>

                    <h6 class="card-title"><a class="d-block position-relative mb-3" href="{{ route('show', $art->slug) }}">{{ $art->judul }}</a></h6>
                    <p class="card-text fs-sm">{!! Str::limit( strip_tags(html_entity_decode( $art->body )), 120 ) !!}</p>
                    <!-- <a class="btn btn-sm btn-primary" href="#">Go somewhere</a> -->
                    <div class="d-flex align-items-center text-decoration-none">
                        <div class="ps-0">
                            <h6 class="fs-base text-nav lh-base mb-1">by {{ $art->user->name }}</h6>
                            <div class="d-flex text-body fs-sm"><span class="me-2 pe-1">
                                    <i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>
                                    {{ Carbon\Carbon::parse($art->created_at)->isoFormat('MMMM Y'); }}</span>
                                <!-- <span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>0 comments</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </div>
    <!-- Pagination-->

    <div class="d-flex justify-content-center">
        {!! $artikel->links() !!}
    </div>
    <hr class="mt-5" />
</div>


<section class="container position-relative zindex-1 mb-4">
    <div class="bg-secondary rounded-3 px-3 py-5">
        <div class="text-center py-sm-3 py-md-5">
            <h3 class="h5 fw-normal">{{ __('footer.iklan')}}</h3>
            <h2 class="pb-4">{{ __('footer.usnow')}}</h2><a href="https://wa.link/r2mnnh" class="btn btn-lg button-contact" target="_blank" style="vertical-align:middle"><i class="fi-whatsapp" style="font-size: 17px; padding-right: 5px"></i><span>Whatsapp</span></a>
        </div>
    </div>
</section>
@endsection