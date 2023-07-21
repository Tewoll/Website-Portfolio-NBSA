@extends('home.layouts.main')

@section('main')

<!-- Page container-->
<div class="container mt-5 mb-md-4 py-5">
    <!-- Breadcrumb + page title-->
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">NBSA News</li>
        </ol>
    </nav>
    <h1 class="d-flex align-items-end justify-content-between mb-4">NBSA News : {{$tagnya->nm_tag}}</h1>

    <hr class="mt-3 mb-3" />

    <div class="row gy-3 mb-2 pb-2">
        <div class="col-md-12 col-lg-4 order-lg-1 offset-lg-8">
            <div class="position-relative">
                <form class="form" method="get" action="#">
                    <input class="form-control pe-5" type="text" name="search" placeholder="Search articles by keywords..."><i class="fi-search position-absolute top-50 end-0 translate-middle-y me-3"></i>
                </form>
            </div>
        </div>
    </div>
    <hr class="mb-5" />
    <!-- Articles grid-->
    <div class="row row-cols-md-2 row-cols-1 gy-md-5 gy-4 mb-lg-5 mb-4">
        @foreach ($artikel as $art )
        <article class="col pb-2 pb-md-1">
            <div class="card card-horizontal" style="max-width: 40rem;">
                <div class="card-img-top" style="background-image: url( {{ asset('storage/'.$art->artikel_tag->gambar_artikel) }} );"></div>
                <div class="card-body">
                    <a class="fs-sm text-uppercase text-decoration-none" href="{{ route('ktgrnya', $art->artikel_tag->kategori->slug) }}">{{ $art->artikel_tag->kategori->nama_kategori }}</a>
                    <h6 class="card-title"><a class="d-block position-relative mb-3" href="{{ route('show', $art->artikel_tag->slug) }}">{{ $art->artikel_tag->judul }}</a></h6>
                    <p class="card-text fs-sm">{!! Str::limit( strip_tags(html_entity_decode( $art->artikel_tag->body )), 120 ) !!}</p>
                    <!-- <a class="btn btn-sm btn-primary" href="#">Go somewhere</a> -->
                    <div class="d-flex align-items-center text-decoration-none">
                        <div class="ps-0">
                            <h6 class="fs-base text-nav lh-base mb-1">by {{ $art->artikel_tag->user->name }}</h6>
                            <div class="d-flex text-body fs-sm"><span class="me-2 pe-1">
                                    <i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>
                                    {{ Carbon\Carbon::parse($art->artikel_tag->created_at)->isoFormat('MMMM Y'); }}</span>
                                <!-- <span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>0 comments</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </div>

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