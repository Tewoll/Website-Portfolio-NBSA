@extends('home.layouts.main')

@section('main')
<!-- Carousel -->
<div
    style="background-image: url(/home/img/bg/template-bg.png); background-repeat: no-repeat; background-size: cover; background-position: center center; font-family: 'Quicksand', sans-serif;">
    <section class="container pt-5 my-5 pb-lg-4 pb-sm-1">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 col-md-6">
                <div class="tns-carousel-wrapper tns-nav-outside">
                    <div class="tns-carousel-inner"
                        data-carousel-options="{&quot;autoplay&quot;: true, &quot;controls&quot;: false, &quot;gutter&quot;: 16}">
                        <div class="text-center"><img class="rounded-3" src="{{ url('home/img/hero/01.jpg') }}"
                                width="900" height="400" alt="Fokus Proyek PT. NBSA"></div>
                        <div class="text-center"><img class="rounded-3" src="{{ url('home/img/hero/02.jpg') }}"
                                width="900" height="400" alt="Sertifikat ISO PT. NBSA"></div>
                        <div class="text-center"><img class="rounded-3" src="{{ url('home/img/hero/03.jpg') }}"
                                width="900" height="400" alt="Proyek PT. NBSA"></div>
                        <div class="text-center"><img class="rounded-3" src="{{ url('home/img/hero/04.jpg') }}"
                                width="900" height="400" alt="Tim PT. NBSA"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Carousel End -->


<!-- About Start -->
<section class="container pt-lg-5 my-5 pb-sm-3 pb-lg-4">
    <div class="home-1-bg">
        <div class="col-md-11 col-12 offset-md-1 p-md-0 p-2 d-flex align-items-center justify-content-between">
            <div class="col-5 d-md-block d-none align-self-center px-0">
                <img class="mt-n4 rounded-3" src="{{ url('home/img/home-image.png') }}" width="700" height="400"
                    alt="Cover image">
            </div>
            <div class="me-md-5 py-md-5 px-md-0 p-2" style="max-width: 526px;">
                <h1 class="mb-md-1 judul-home-hal">{{ __('home.about') }}</h1>
                <h4 class="mb-md-2" style="font-family: 'Odor Mean Chey'; color:brown;"><b>PT. NAGA BARU SUKSES
                        ABADI</b></h4>
                <p style="text-align: justify; font-family: 'Titillium Web';">{{ __('home.text_1') }} <b>{{ __('home.text_2') }}</b> {{ __('home.text_3') }} <b>{{ __('home.text_4') }}</b>, <b>{{ __('home.text_5') }}</b>{{ __('home.text_6') }}
                    <b>{{ __('home.text_7') }}</b>.
                </p>
                <p style="text-align: justify; font-family: 'Titillium Web';">{{ __('home.text_8') }} <b>{{ __('home.text_9') }}</b> {{ __('home.text_10') }} <b>{{ __('home.text_11') }}</b> {{ __('home.text_12') }}</p>
                <p style="text-align: justify; font-family: 'Titillium Web';">{{ __('home.text_13') }}
                    <b>{{ __('home.text_14') }}</b>
                </p>
                <p class="mb-4" style="text-align: justify; font-family: 'Titillium Web';">{{ __('home.text_15') }} <b>{{ __('home.text_16') }}</b> {{ __('home.text_17') }} <b>{{ __('home.text_18') }}</b>.</p>
                <div class="text-center text-lg-start">
                    <a class="btn btn-translucent-info btn-sm" href="/about"><i class="fi-info-circle"
                            style="font-size: 15px; padding-right: 5px"></i><span>{{ __('home.baca') }}</span></a>
                    <!-- <a class="btn btn-translucent-success btn-sm" href="https://wa.link/r2mnnh">Call Us<i class="fi-whatsapp" style="font-size: 17px; padding-left: 5px"></i></a> -->
                    <a href="https://wa.link/r2mnnh" class="btn button-contact" style="vertical-align:middle"><i
                            class="fi-whatsapp" style="font-size: 12px; padding-right: 5px"></i><span>{{ __('navbar.contact') }}</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- Why choose us?-->
<section class="services">
    <div class="container col-sm-11 pb-5">
        <h3 class="text-center" style="font-family: 'Odor Mean Chey'">{{ __('home.memilih') }}</h3>
        <div class="tns-carousel-wrapper tns-nav-outside">
            <div class="tns-carousel-inner"
                data-carousel-options="{&quot;loop&quot;: false, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 24}}}">
                <div>
                    <div class="card card-hover h-100">
                        <div class="card-body icon-box text-center">
                            <div class="icon-box-media text-light mx-auto mb-3 d-inline-flex align-items-center justify-content-center"
                                style="width: 4.5rem; height: 4.5rem">
                                <img src="{{ url('home/img/logo/spec.png') }}" alt="Car icon" />
                            </div>
                            <h6 class="card-title pb-1">{{ __('home.spek') }}</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-hover h-100">
                        <div class="card-body icon-box text-center">
                            <div class="icon-box-media text-light mx-auto mb-3 d-inline-flex align-items-center justify-content-center"
                                style="width: 4.5rem; height: 4.5rem">
                                <img src="{{ url('home/img/logo/time.png') }}" alt="Car icon" />
                            </div>
                            <h6 class="card-title pb-1">{{ __('home.waktu') }}</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-hover h-100">
                        <div class="card-body icon-box text-center">
                            <div class="icon-box-media text-light mx-auto mb-3 d-inline-flex align-items-center justify-content-center"
                                style="width: 4.5rem; height: 4.5rem">
                                <img src="{{ url('home/img/logo/budget.png') }}" alt="Car icon" />
                            </div>
                            <h6 class="card-title pb-1">{{ __('home.budget') }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <p class="card-text" style="text-align: center; font-family: 'Titillium Web';">{{ __('home.we_try') }}</p>
            </div>
        </div>
        <br>
    </div>
</section>

<!-- Core Values-->
<section class="container pt-5 my-5 pb-sm-3 pb-lg-4 home-2-bg">
    <div class="mx-auto mb-5">
        <h1 class="mb-md-4 text-center" style="font-family: 'Odor Mean Chey'">{{ __('home.nilai') }}</h1>
    </div>
    <div class="col">
        <div class="text-center"
            style="border: 3px solid #454056; border-radius: 10px; padding-top: 5px;padding-bottom: 2px; background-color: rgb(201, 3, 3)">
            <h4 class="card-title" style="color: rgb(255, 255, 255)">{{ __('home.reliable') }}</h4>
        </div>
    </div>
    <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2">
        <div class="tns-carousel-inner row gx-4 mx-0 py-3"
            data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}}}">
            <div class="col">
                <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"
                    style="background-color: rgba(3, 89, 201, 0.084)"><img class="d-block mx-auto my-3"
                        src="{{ url('home/img/logo/o.png') }}" width="150" alt="Ownership">
                    <div class="card-body">
                        <h5 class="h5 card-title">OWNERSHIP</h5>
                        <p class="card-text fs-sm">{{ __('home.owner') }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"
                    style="background-color: rgba(237, 101, 31, 0.084)"><img class="d-block mx-auto my-3"
                        src="{{ url('home/img/logo/p.png') }}" width="150" alt="Professional">
                    <div class="card-body">
                        <h5 class="h5 card-title">PROFESSIONAL</h5>
                        <p class="card-text fs-sm">{{ __('home.pro') }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"
                    style="background-color: rgba(0, 194, 203, 0.084)"><img class="d-block mx-auto my-3"
                        src="{{ url('home/img/logo/a.png') }}" width="150" alt="Approachable">
                    <div class="card-body">
                        <h5 class="h5 card-title">APPROACHABLE</h5>
                        <p class="card-text fs-sm">{{ __('home.approach') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto pt-3 text-center">
        <a class="btn btn-translucent-info btn-sm" href="/about#core-values" name="core-values"><i
                class="fi-info-circle" style="font-size: 17px; padding-right: 5px"></i><span>{{ __('home.baca') }}</span></a>&nbsp;
        <a href="https://wa.link/r2mnnh" class="btn button-contact" style="vertical-align:middle"><i class="fi-whatsapp"
                style="font-size: 17px; padding-right: 5px"></i><span>{{ __('navbar.contact') }}</span></a>
    </div>
</section>
<hr class="mt-n1 mb-5 d-md-none">

<!-- Working Method-->
<section class="container pt-5 mb-5 pb-2 pb-lg-4">
    <div class="mx-auto mb-5">
        <h1 class="mb-lg-5 mb-md-sm-4 text-center" style="font-family: 'Odor Mean Chey'">{{ __('home.method') }}</h1>
    </div>
    <div class="row gy-4">
        <div class="col-lg-4 col-md-4 col-12"><img class="d-block mx-auto" src="{{ url('home/img/method.png') }}"
                alt="Working Method NBSA"></div>
        <div class="col-lg-7 offset-lg-1 col-md-7 col-12">
            <div class="steps steps-vertical">
                <div class="step active">
                    <!-- <div class="step-progress"><span class="step-number">2</span></div> -->
                    <img class="step-number" src="{{ url('home/img/logo/plan-icon.png') }}" alt="icon">
                    <div class="step-label ms-4">
                        <h3 class="h5 mb-0 pb-1">{{ __('home.plan') }}</h3>
                        <p class="mb-0" style="text-align: justify; font-family: 'Titillium Web'">{{ __('home.plan_text') }}</p>
                    </div>
                </div>
                <div class="step active">
                    <img class="step-number" src="{{ url('home/img/logo/control-icon.png') }}" alt="icon">
                    <div class="step-label ms-4">
                        <h3 class="h5 mb-0 pb-1">{{ __('home.control') }}</h3>
                        <p class="mb-0" style="text-align: justify; font-family: 'Titillium Web'">{{ __('home.control_text') }}</p>
                    </div>
                </div>
                <div class="step active">
                    <img class="step-number" src="{{ url('home/img/logo/follow-icon.png') }}" alt="icon">
                    <div class="step-label ms-4">
                        <h3 class="h5 mb-0 pb-1">{{ __('home.follow') }}</h3>
                        <p style="text-align: justify; font-family: 'Titillium Web'">{{ __('home.follow_text') }}</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <a class="btn btn-translucent-info btn-sm" href="/about#work-method" name="work-method"><i
                        class="fi-info-circle" style="font-size: 17px; padding-right: 5px"></i><span>{{ __('home.baca') }}</span></a>&nbsp;
                <a href="https://wa.link/r2mnnh" class="btn button-contact" style="vertical-align:middle"><i
                        class="fi-whatsapp" style="font-size: 17px; padding-right: 5px"></i><span>{{ __('navbar.contact') }}</span></a>
            </div>
        </div>
    </div>
</section>
<hr class="mt-n1 mb-5 d-md-none">

<!-- SERVICES FOCUS-->
<section class="container pb-4 pt-5 my-5 mb-5 pb-sm-3 pb-lg-4">
    <div class="mx-auto mb-5">
        <h1 class="mb-lg-5 mb-md-sm-4 text-center" style="font-family: 'Odor Mean Chey'">{{ __('home.fokus') }}</h1>
    </div>
    <div class="row col-xl-10 offset-xl-1 row-cols-lg-6 row-cols-sm-2 row-cols-2 g-2 g-xl-4 text-center">
        <div class="col-lg-6">
            <a class="icon-box card card-body h-100 shadow-sm card-hover h-100 text-center" href="/project"
                name="project-focus"
                style="min-height: 200px; border: 7px solid rgb(97, 93, 94); background-color: rgb(199, 37, 42)"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover"
                title="{{ __('home.warehouse') }}"
                data-bs-content="{{ __('home.warehouse_text') }}">
                <div class="d-md-block align-self-center px-0"><img src="{{ url('home/img/about/01 - Copy.png') }}"
                        width="100" alt="{{ __('home.warehouse') }}"></div>
                <h6 class="icon-box-title text-light" style="font-size: 90%;">{{ __('home.warehouse') }}</h6>
            </a>
        </div>
        <div class="col-lg-6">
            <a class="icon-box card card-body h-100 shadow-sm card-hover h-100 text-center" href="/project"
                style="min-height: 200px; border: 7px solid rgb(199, 37, 42); background-color: rgb(97, 93, 94)"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover"
                title="{{ __('home.office') }}"
                data-bs-content="{{ __('home.office_text') }}">
                <div class="d-md-block align-self-center px-0"><img src="{{ url('home/img/about/02 - Copy.png') }}"
                        width="100" alt="{{ __('home.office') }}"></div>
                <h6 class="icon-box-title text-light" style="font-size: 90%;">{{ __('home.office') }}</h6>
            </a>
        </div>
        <div class="col-lg-6">
            <a class="icon-box card card-body h-100 shadow-sm card-hover h-100 text-center" href="/project"
                style="min-height: 200px; border: 7px solid rgb(199, 37, 42); background-color: rgb(97, 93, 94)"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover"
                title="{{ __('home.house') }}"
                data-bs-content="{{ __('home.house_text') }}">
                <div class="d-md-block align-self-center px-0"><img src="{{ url('home/img/about/03 - Copy.png') }}"
                        width="100" alt="{{ __('home.house') }}"></div>
                <h6 class="icon-box-title text-light" style="font-size: 90%;">{{ __('home.house') }}</h6>
            </a>
        </div>
        <div class="col-lg-6">
            <a class="icon-box card card-body h-100 shadow-sm card-hover h-100 text-center" href="/project"
                style="min-height: 200px; border: 7px solid rgb(97, 93, 94); background-color: rgb(199, 37, 42)"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover"
                title="{{ __('home.infra') }}"
                data-bs-content="{{ __('home.infra_text') }}">
                <div class="d-md-block align-self-center px-0"><img src="{{ url('home/img/about/04 - Copy.png') }}"
                        width="100" alt="{{ __('home.infra') }}"></div>
                <h6 class="icon-box-title text-light" style="font-size: 90%;">{{ __('home.infra') }}</h6>
            </a>
        </div>
    </div>
</section>
<hr class="mt-n1 mb-5 d-md-none">

@if ($portfolio == NULL)
@else
<!-- Project Portfolio-->
<section class="container pb-4 pt-5 mb-5 my-5 pb-sm-3 pb-lg-4">
    <div class="d-flex align-items-end align-items-lg-center justify-content-between mb-4 pb-md-2">
        <div class="d-flex w-100 align-items-center justify-content-between justify-content-lg-start">
            <h1 class="mb-0 me-md-4 judul-home-hal">{{ __('home.project') }}</h1>
        </div>
    </div>
    <div class="row g-4">
        @foreach ($portfolio as $pok)
        <div class="col-md-6">
            <div class="card bg-size-cover bg-position-center border-0 overflow-hidden h-100"
                style="background-image: url({{asset('storage/'.$pok->foto)}});"><span
                    class="img-gradient-overlay"></span>
                <div class="card-body content-overlay pb-0"></div>
                <div class="card-footer content-overlay border-0 pt-0 pb-4">
                    <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5"><a
                            class="text-decoration-none text-light pe-2" href="{{ route('lihat', $pok->slug) }}">
                            <div class="fs-sm text-uppercase pt-2 mb-1">{{$pok->kategori->nm_ktgr}}</div>
                            <h3 class="h5 text-light mb-1">{{$pok->nama}}</h3>
                            <div class="fs-sm opacity-70"><i
                                    class="fi-map-pin me-1"></i>{{ $pok->lokasi->kota->nm_kota }},
                                {{ $pok->lokasi->prov->nm_provinsi }}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        @if ($jumlah_p >= 2)
        <div class="col-lg-12">
            <div class="text-center mb-4 pb-md-2 mt-3">
                <a class="btn btn-link fw-normal p-0" href="/project">{{ __('home.lihat') }}<i
                        class="fi-arrow-long-right ms-2"></i></a>
            </div>
        </div>
        @else
        @endif
    </div>
</section>
<hr class="mt-n1 mb-5 d-md-none">
@endif

@if ($artikel == NULL)
@else
<!-- Blog-->
<section class="container pb-4 pt-5 mb-5 my-5 pb-sm-3 pb-lg-4">
    <div class="d-flex align-items-end align-items-lg-center justify-content-between mb-4 pb-md-2">
        <div class="d-flex w-100 align-items-center justify-content-between justify-content-lg-start">
            <h1 class="mb-0 me-md-4 judul-home-hal">NBSA NEWS</h1>
        </div>
    </div>
    <div class="row gy-4">
        @foreach ($artikel as $art)
        <div class="col-md-6">
            <article class="card border-0 shadow-sm card-hover card-horizontal mb-4">
                <div class="card-img-top" style="background-image: url({{ asset('storage/'.$art->gambar_artikel) }})">
                </div>
                <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none"
                        href="#">{{$art->kategori->nama_kategori}}</a>

                    <a class="text-decoration-none" href="{{ route('show', $art->slug) }}">
                        <h3 class="fs-base pt-1 mb-2">{{$art->judul}}</h3>
                        <p class="fs-sm text-muted">{!! Str::limit( strip_tags(html_entity_decode( $art->body )), 160 )
                            !!}</p>

                    </a>
                    <div class="ps-2">
                        <h6 class="fs-sm text-nav lh-base mb-1">{{$art->user->name}}</h6>
                        <div class="d-flex text-body fs-xs">
                            <span class="me-2 pe-1"><i
                                    class="fi-calendar-alt opacity-70 me-1"></i>{{ Carbon\Carbon::parse($art->created_at)->isoFormat('MMMM Y'); }}</span>
                            <!-- <span><i class="fi-chat-circle opacity-70 me-1"></i>3 comment</span> -->
                        </div>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
        @if ($jumlah_a >= 2)
        <div class="col-lg-12">
            <div class="text-center mb-4 pb-md-2">
                <a class="btn btn-link fw-normal p-0" href="/project">{{ __('home.lihat') }}<i
                        class="fi-arrow-long-right ms-2"></i></a>
            </div>
        </div>
        @else
        @endif
    </div>
</section>
<hr class="mt-n1 mb-5 d-md-none">
@endif

<!-- Feed Instagram -->
<section class="container pb-4 pt-5 mb-5 my-5 pb-sm-3 pb-lg-4">
    <div class="container col-sm-11">
        <h3 class="text-center" style="font-family: 'Odor Mean Chey'">FEED INSTAGRAM</h3>
        <div class="row gy-5">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-4e20708f-8daf-4bf6-b7c6-a1fd268a0789"></div>
            <div class="text-center">
                <a href="https://www.instagram.com/nagabarusuksesabadi" class="btn button-ig"
                    style="vertical-align:middle" target="_blank"><i class="fi-instagram"
                        style="font-size: 17px; padding-right: 5px"></i><span>{{ __('home.flw') }}</span></a>
            </div>
        </div>
    </div>
</section>

<!-- Partners (carousel)-->
<section class="container pb-4 pt-5 mb-5 my-5 pb-sm-3 pb-lg-4">
    <div class="card py-lg-5 py-4 border-2">
        <div class="card-body p-4 text-center">
            <h1 class="text-center" style="font-family: 'Odor Mean Chey'">{{ __('home.client') }}</h1>
            <br>
            <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush">
                <div class="tns-carousel-inner" data-carousel-options="
                        {&quot;autoplay&quot;: false,
                            &quot;items&quot;: 6, &quot;controls&quot;: false, 
                            &quot;responsive&quot;: {
                                &quot;0&quot;:{&quot;items&quot;:1}, 
                                &quot;300&quot;:{&quot;items&quot;:2}, 
                                &quot;980&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 4}, 
                                &quot;1200&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 5}
                            }
                        }">
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/alfamart.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/abp.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/bni.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/btpn.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/bca.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/pegadaian.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/akr.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/biznet.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/giordano.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/iveco.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/kalog.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/smart.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/pos.png') }}" width="80">
                        </a>
                    </div>
                    <div>
                        <a><img class="swap-to" src="{{ url('home/img/clients/schlumberger.png') }}" alt="Logo"
                                width="80">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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