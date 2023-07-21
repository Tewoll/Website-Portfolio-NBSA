@extends("home.layouts.main")

@section("main")

<section class="container mt-5 mb-md-4 py-5">
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/news">News NBSA</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $lihat->judul }}</li>
        </ol>
    </nav>
    <h1 class="h2 mb-4">{{ $lihat->judul }}</h1>
    <div class="mb-4 pb-1">
        <ul class="list-unstyled d-flex flex-wrap mb-0 text-nowrap">
            <li class="me-3"><i class="fi-calendar-alt me-2 mt-n1 opacity-60"></i>{{ Carbon\Carbon::parse($lihat->created_at)->isoFormat('MMMM Y'); }}</li>
            <li class="me-3 border-end"></li>
            <li class="me-3"><a class="text-uppercase" href="{{ route('ktgrnya', $lihat->kategori->slug) }}"><i class="fi-category-alt me-2 mt-n1 opacity-60"></i>{{ $lihat->kategori->nama_kategori }}</a></li>
            <li class="me-3 border-end"></li>
        </ul>
    </div>
</section>

<section class="container overflow-auto mb-4 ps-lg-5 pe-lg-5" data-simplebar>
    <div class="mb-4 pb-md-3">
        <img class="rounded-3" src="{{ asset('storage/'.$lihat->gambar_artikel) }}" style="height: 500px; width: 100%;">
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-2 col-md-1 mb-md-0 mb-4 mt-md-n5">
                    <div class="sticky-top py-md-5 mt-md-5">
                        <div class="d-flex flex-md-column align-items-center my-2 mt-md-4 pt-md-5">
                            <div class="d-md-none fw-bold text-nowrap me-2 pe-1">Share:</div>
                            <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="https://www.facebook.com/sharer.php?u={{ route('show', $lihat->slug) }}" data-bs-toggle="tooltip" title="Share with Facebook">
                                <i class="fi-facebook"></i>
                            </a>
                            <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="https://twitter.com/intent/tweet?url={{ route('show', $lihat->slug) }}" data-bs-toggle="tooltip" title="Share with Twitter">
                                <i class="fi-twitter"></i>
                            </a>
                            <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="https://linkedin.com/sharing/share-offsite/?url{{ route('show', $lihat->slug) }}" data-bs-toggle="tooltip" title="Share with LinkedIn">
                                <i class="fi-linkedin"></i>
                            </a>
                            <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="
                            https://api.whatsapp.com/send?phone={phone_number}&text={{ route('show', $lihat->slug) }}" data-bs-toggle="tooltip" title="Share with Whatsapp">
                                <i class="fi-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <article>
                        {!! html_entity_decode($lihat->body) !!}
                    </article>
                    <div class="d-flex align-items-center my-md-5 my-4 py-md-4 py-3 border-top">
                        <div class="fw-bold text-nowrap mb-2 me-2 pe-1">
                            Tags:
                        </div>

                        <div class="d-flex flex-wrap">
                            @foreach ($detail as $tags )
                            <a class="btn btn-xs btn-outline-secondary rounded-pill fs-xs fw-normal me-2 mb-2" href="{{ route('tagnya', $tags->tag->slug) }}">{{ $tags->tag->nm_tag }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress of completion-->
        <aside class="col-lg-4 d-none d-lg-block">
            <div class="sticky-top pt-7">
                <!-- Contact card-->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <form class="form-group">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="cari artikel dsni..">
                                </div>
                                <button type="button" class="btn btn-icon btn-outline-primary btn-xs">
                                    <i class="fi-search"></i>
                                </button>
                            </form>
                        </div>
                        <ul class="list-unstyled border-bottom mb-4 pb-4"></ul>
                        <!-- Contact form-->
                        <h5 class="mb-4 fs-md">New Post</h2>
                            <div class="mb-3">
                                @foreach ($lain as $rows)
                                <article class="d-flex align-items-start" style="max-width: 640px">
                                    <a class="d-none d-sm-block flex-shrink-0 me-sm-4 mb-sm-0 mb-3" href="{{ route('show', $rows->slug) }}"><img class="rounded-3" src="{{ asset('storage/'.$rows->gambar_artikel) }}" width="100" alt="{{ $rows->gambar_artikel }}" /></a>
                                    <div>
                                        <h5 class="mb-2 fs-base">
                                            <a class="nav-link" href="{{ route('show', $rows->slug) }}">{{ $rows->judul }}</a>
                                        </h5>
                                        <!-- <p class="mb-2 fs-sm">
                                {!! Str::limit( strip_tags(html_entity_decode( $rows->body )), 160 ) !!}
                            </p> -->
                                        <!-- <a class="nav-link nav-link-muted d-inline-block me-3 p-0 fs-xs fw-normal" href="#"><i class="fi-calendar mt-n1 me-1 fs-sm align-middle opacity-70"></i>Dec 4</a><a class="nav-link nav-link-muted d-inline-block me-3 p-0 fs-xs fw-normal" href="#"><i class="fi-chat-circle mt-n1 me-1 fs-sm align-middle opacity-70"></i>2 comments</a> -->
                                    </div>
                                </article>
                                <hr class="text-dark opacity-10 my-4" />
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>

<section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
    <div class="pt-2 pb-2" style="border-top-style: solid; border-top-color: coral; border-bottom-style: solid; border-bottom-color: coral;">
        <div class="row g-4">
            <div class="col-md-6">
                @if ($sebelum == NULL)
                
                @else
                <a class="icon-box card card-hover" href="{{ route('show', $sebelum->slug) }}">
                    <div class="card-body">
                        <div class="text-start text-md-start">
                        <h3 class="fs-base">← Artikel Sebelumnya</h3>
                        <p class="fs-sm">{!! Str::limit( strip_tags(html_entity_decode( $sebelum->judul )), 80 ) !!}</p>
                        </div>
                    </div>
                </a>
                @endif
            </div>
            <div class="col-md-6">
                @if ($sesudah == NULL)

                @else
                <a class="icon-box card card-hover" href="{{ route('show', $sesudah->slug) }}">
                    <div class="card-body">
                        <div class="text-start text-md-end">
                        <h3 class="fs-base">Artikel Selanjutnya →</h3>
                        <p class="fs-sm">{!! Str::limit( strip_tags(html_entity_decode( $sesudah->judul )), 80 ) !!}</p>
                        </div>
                    </div>
                </a>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Contact us-->
<!-- <section class="container-xxl py-5">
    <div class="row align-items-sm-center">
        <div class="text-center">
            <a href="https://wa.link/r2mnnh" class="btn btn-lg button-contact" target="_blank" style="vertical-align:middle"><i class="fi-whatsapp" style="font-size: 17px; padding-right: 5px"></i><span>Contact Us</span>
            </a>
        </div>
    </div>
</section> -->
<section class="container position-relative zindex-1 mb-4">
    <div class="bg-secondary rounded-3 px-3 py-5">
        <div class="text-center py-sm-3 py-md-5">
            <h3 class="h5 fw-normal">{{ __('footer.iklan')}}</h3>
            <h2 class="pb-4">{{ __('footer.usnow')}}</h2><a href="https://wa.link/r2mnnh" class="btn btn-lg button-contact" target="_blank" style="vertical-align:middle"><i class="fi-whatsapp" style="font-size: 17px; padding-right: 5px"></i><span>Whatsapp</span></a>
        </div>
    </div>
</section>
@endsection