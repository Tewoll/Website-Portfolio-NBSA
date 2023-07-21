@extends('home.layouts.main')

@section('main')
<!-- Breadcrumb-->
<div class="container mt-5 mb-md-4 pt-5">
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb" style="padding-right: 15px; padding-left: 15px;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ __('navbar.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('navbar.about') }}</li>
        </ol>
    </nav>
</div>

<!-- About -->
<section class="about-bg">
    <div class="container-xxl">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 col-md-5 col-sm-10 order-md-1 order-2 text-md-start text-center">
                <h1 class="mt-4 mt-lg-0 judul-home-hal">{{ __('about.tentang')}}</h1>
                <p class="mb-4 pb-3 text-rata" style="font-family: Titillium Web;">{{ __('about.tentang_1')}}<br>
                    <br>{{ __('about.tentang_2')}} <b>ISO 9001:2015</b> &amp; <b>ISO 45001:2018</b> {{ __('about.tentang_3')}}<br>
                    <br>{{ __('about.tentang_4')}}<br>
                    <br>{{ __('about.tentang_5')}}<br>
                    <br>{{ __('about.tentang_6')}}
                </p>
                <div class="text-center text-lg-start">
                    <a href="https://wa.link/r2mnnh" class="btn button-contact" style="vertical-align:middle"><i class="fi-whatsapp" style="font-size: 12px; padding-right: 5px"></i><span>{{ __('about.contact')}}</span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 offset-md-1 col-12 order-md-2 order-1">
                <div class="tns-carousel-wrapper tns-controls-static tns-nav-outside">
                    <div class="tns-carousel-inner text-center" data-carousel-options="{&quot;loop&quot;: true, &quot;gutter&quot;: 16}">
                        <div><img class="rounded-3" src="{{ url('home/img/logo/icon-nbsa.png') }}" width="250px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision and Mission-->
<section class="method-bg" id="vision-mision">
    <div class="container py-4">
        <br>
        <div class="card border-1 shadow-sm h-100 p-4">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0"><img class="d-block mx-auto" src="{{ url('home/img/visi&misi.png') }}" alt="Visi&Misi"></div>
                <div class="col-lg-1 d-none d-lg-block">
                    <hr class="hr-vertical mx-auto">
                </div>
                <div class="col-md-8 col-lg-7">
                    <div class="tns-carousel-wrapper">
                        <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;controlsContainer&quot;: &quot;#agents-carousel-controls&quot;, &quot;nav&quot;: false}">
                            <div class="pt-3 pb-3">
                                <div class="card border-0 shadow-sm">
                                    <blockquote class="blockquote card-body">

                                        <head class="d-flex align-items-center">
                                            <div class="ps-3">
                                                <h6 class="fs-4 mb-0">{{ __('about.visi')}}</h6>
                                            </div>
                                        </head>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item mission fs-xs text-rata"><b>{{ __('about.visi_text')}}</b>
                                            </li>
                                        </ul>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="pt-3 pb-3">
                                <div class="card border-0 shadow-sm">
                                    <blockquote class="blockquote card-body">

                                        <head class="d-flex align-items-center">
                                            <div class="ps-3">
                                                <h6 class="fs-4 mb-0">{{ __('about.misi')}}</h6>
                                            </div>
                                        </head>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item mission fs-xs text-rata"><b>{{ __('about.misi_1')}}</b></li>
                                            <li class="list-group-item mission fs-xs text-rata"><b>{{ __('about.misi_2')}}</b></li>
                                            <li class="list-group-item mission fs-xs text-rata"><b>{{ __('about.misi_3')}}</b></li>
                                            <li class="list-group-item mission fs-xs text-rata"><b>{{ __('about.misi_4')}}</b></li>
                                        </ul>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tns-carousel-controls justify-content-center justify-content-md-start my-2 ms-md-2" id="agents-carousel-controls">
                        <button class="mx-2" type="button"><i class="fi-chevron-left"></i></button>
                        <button class="mx-2" type="button"><i class="fi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificate-->
<section class="values method-bg" id="certificate">
    <div class="certificate-yt bg-white">
        <div class="text-center mx-auto mb-5">
            <br>
            <h2 class="mb-4 pb-2 text-center">{{ __('about.sertifikat') }}</h2>
        </div>
        <div class="row  mb-5">
            <div class="col-lg-4 col-md-4 offset-md-2 offset-lg-2">
                <div class="box">
                    <img src="{{ url('home/img/iso-1.png') }}" class="img-fluid" alt="">
                    <dt class="fs-sm">ISO 9001:2015<br>(QUALITY MANAGEMENT SYSTEM)</dt>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="box">
                    <img src="{{ url('home/img/iso-2.png') }}" class="img-fluid" alt="">
                    <dt class="fs-sm">ISO 45001:2018<br>(OCCUPATIONAL HEALTH AND SAFETY MANAGEMENT SYSTEM)</dt>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values-->
<section class="method-bg" id="core-values">
    <div class="container-xxl py-5 bg-white">
        <div class="mx-auto">
            <div class="section-header">
                <h2 class="mb-lg-5 mb-md-4 judul-home-hal text-center">{{ __('home.nilai') }}</h2>
            </div>
            <hr>
            <div class="row gy-4">
                <div class="col-md-4 col-12"><img class="d-block mx-auto" src="{{ url('home/img/values.png') }}" alt="Core Values Kontraktor Professional" width="365"></div>
                <div class="col-lg-8 col-md-6 col-12">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="h5 mb-2" style="color: red;">{{ __('home.reliable') }}</div>

                                <p class=" fs-sm" style="text-align: justify">{{ __('about.nilai_1') }}<br>
                                {{ __('about.nilai_2') }}<br>
                                {{ __('about.nilai_3') }}<br>
                                {{ __('about.nilai_4') }}</p>
                                <p class=" fs-sm"><b>{{ __('about.nilai_5') }}<br>{{ __('about.nilai_8') }}</b></p>
                                <p class=" fs-sm" style="text-align: justify">{{ __('about.nilai_6') }}</p>
                                <p class=" fs-sm">{{ __('about.nilai_7') }} <b>OPA – OWNERSHIP, PROFESSIONAL, APPROACHABLE.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="tns-carousel-wrapper tns-nav-outside" style=" margin-bottom: 2%;">
                        <div class="tns-carousel-inner" data-carousel-options="{&quot;loop&quot;: false, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 24}}}">
                            <!-- Feature slide-->
                            <div>
                                <div class="card border-1">
                                    <div class="card-body">
                                        <img src="{{ url('home/img/logo/o.png') }}" width="50" height="50">
                                        <div class="mb-2 fs-6 d-inline drop-cap" style="color: #4154f1;">
                                            <b>OWNERSHIP</b>
                                        </div>
                                        <p class="card-text fs-xs mt-2" style="text-align: justify;">{{ __('about.owner') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature slide-->
                            <div>
                                <div class="card border-1">
                                    <div class="card-body">
                                        <img src="{{ url('home/img/logo/p.png') }}" width="50" height="50">
                                        <div class="mb-2 fs-6 d-inline" style="color: #ed651f;"><b>PROFESSIONAL</b>
                                        </div>
                                        <p class="card-text fs-xs mt-2" style="text-align: justify;">{{ __('about.pro') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature slide-->
                            <div>
                                <div class="card border-1">
                                    <div class="card-body">
                                        <img src="{{ url('home/img/logo/a.png') }}" width="50" height="50">
                                        <div class="mb-2 fs-6 d-inline" style="color: #00c2cb;"><b>APPROACHABLE</b>
                                        </div>
                                        <p class="card-text fs-xs mt-2" style="text-align: justify;">{{ __('about.appro') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="https://wa.link/r2mnnh" target="_blank" class="btn button-contact" style="vertical-align:middle"><i class="fi-whatsapp" style="font-size: 17px; padding-right: 5px"></i><span>{{ __('about.contact')}}</span>
            </a>
        </div>
    </div>
</section>

<!-- Work Method -->
<section class="method-bg" id="work-method">
    <div class="container-xxl py-5 mb-2">
        <div class="card border-0 shadow-sm">
            <br />
            <div class="card-header fs-sm text-rata">
                <h2 class="mb-4 mt-5 judul-home-hal text-center">{{ __('about.work')}}</h2>
                <p>{{ __('about.work_1')}}</p>
            </div>
            <div class="card-body">
                <div class="card card-horizontal text-info border-info mb-2">
                    <div class="card-img-top" style="background-image: url(home/img/logo/plan-icon.png); background-size: contain; background-position: center-center">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-info">{{ __('about.plan')}}</h5>
                        <p class="card-text fs-sm text-rata" style="font-family: 'Titillium Web'">{{ __('about.work_2')}}</p>
                    </div>
                </div>
                <div class="card card-horizontal text-primary border-primary mb-2">
                    <div class="card-img-top" style="background-image: url(home/img/logo/control-icon.png); background-size: contain; background-position: center-center">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ __('about.control')}}</h5>
                        <p class="card-text fs-sm text-rata" style=" font-family: 'Titillium Web'">{{ __('about.work_3')}}</p>
                    </div>
                </div>
                <div class="card card-horizontal text-danger border-danger">
                    <div class="card-img-top" style="background-image: url(home/img/logo/follow-icon.png); background-size: contain; background-position: center-center">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-danger">{{ __('about.follow')}}</h5>
                        <p class="card-text fs-sm  text-rata text-rata" style=" font-family: 'Titillium Web'">{{ __('about.work_4')}}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="fs-sm text-rata">"{{ __('about.work_5')}} <b>{{ __('about.work_6')}}</b> {{ __('about.work_7')}}"
                    <br><br>{{ __('about.work_8')}}
                </p>
                <div class="text-center text-lg-start">
                    <a href="https://wa.link/r2mnnh" class="btn button-contact" style="vertical-align:middle"><i class="fi-whatsapp" style="font-size: 17px; padding-right: 5px"></i><span>{{ __('about.contact')}}</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Focus-->
<section id="service-focus">
    <div class="container-xxl py-5 mt-5 mb-md-5 pb-2 pb-lg-4">
        <h2 class="judul-home-hal text-center">{{ __('about.service')}}</h2>
        <div class="tns-carousel-wrapper tns-nav-outside">
            <div class="tns-carousel-inner" data-carousel-options="{&quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 24}}}">
                <div class="d-flex flex-md-row flex-column align-items-md-center mx-3 py-3">
                    <article class="card card-hover shadow-sm h-100" style="border: 7px solid rgb(97, 93, 94)">
                        <div class="card-img-top overflow-hidden  text-center">
                            <img class="text-center p-2" src="{{ url('home/img/about/01.png') }}" width="200" alt="Warehouse">
                        </div>
                        <div class="card-body p-3 text-center ">
                            <h3 class="fs-base mb-2 mt-0">{{ __('home.warehouse') }}
                            </h3>
                            <p class="fs-sm text-muted m-0 text-rata">{{ __('about.service_1')}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('kategorinya', 'warehouse') }}">{{ __('about.lihat_p') }} <i class="fi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="d-flex flex-md-row flex-column align-items-md-center mx-3 py-3">
                    <article class="card card-hover shadow-sm h-100" style="border: 7px solid rgb(199, 37, 42)">
                        <div class="card-img-top overflow-hidden  text-center">
                            <img class="text-center p-2" src="{{ url('home/img/about/02.png') }}" width="200" alt="OFFICE & OUTLET">
                        </div>
                        <div class="card-body p-3 text-center ">
                            <h3 class="fs-base mb-2 mt-0">{{ __('home.office') }}
                            </h3>
                            <p class="fs-sm text-muted m-0 text-rata">{{ __('about.service_2')}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('kategorinya', 'office-outlet') }}">{{ __('about.lihat_p') }} <i class="fi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="d-flex flex-md-row flex-column align-items-md-center mx-3 py-3">
                    <article class="card card-hover shadow-sm h-100" style="border: 7px solid rgb(97, 93, 94)">
                        <div class="card-img-top overflow-hidden  text-center">
                            <img class="text-center p-2" src="{{ url('home/img/about/03.png') }}" width="200" alt="HOUSE DEVELOPMENT">
                        </div>
                        <div class="card-body p-3 text-center ">
                            <h3 class="fs-base mb-2 mt-0">{{ __('home.house') }}
                            </h3>
                            <p class="fs-sm text-muted m-0 text-rata">{{ __('about.service_3')}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('kategorinya', 'house-development') }}">{{ __('about.lihat_p') }} <i class="fi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="d-flex flex-md-row flex-column align-items-md-center mx-3 py-3">
                    <article class="card card-hover shadow-sm h-100" style="border: 7px solid rgb(199, 37, 42)">
                        <div class="card-img-top overflow-hidden  text-center">
                            <img class="text-center p-2" src="{{ url('home/img/about/04.png') }}" width="200" alt="INFRASTRUCTURE">
                        </div>
                        <div class="card-body p-3 text-center ">
                            <h3 class="fs-base mb-2 mt-0">{{ __('home.infra') }}
                            </h3>
                            <p class="fs-sm text-muted m-0 text-rata">{{ __('about.service_4')}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('kategorinya', 'infrastructure') }}">{{ __('about.lihat_p') }} <i class="fi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Structure Organization -->
<section class="container-xxl py-5 mt-5 mb-md-5 pb-2 pb-lg-4" id="struktur-organization"><img class="rounded-3" src="home/img/team-nbsa.jpg" style="opacity: 30%;">
    <div class="col-md-10 mx-md-auto mx-3 mt-sm-0 mt-5 py-sm-5 py-4 px-0 rounded-3 bg-light shadow-sm" style="transform: translateY(-70px);">
        <div class="col-md-10 mx-md-auto mx-3 py-lg-4 px-0 text-light">
            <h2 class="text-center">{{ __('about.struktur')}}</h2>
            <p class="pb-md-3 text-center text-dark fs-xs">{{ __('about.struktur_1')}}</p>
            <br>
            <div class="col-lg-12 text-center text-md-start">
                <img class="d-block mx-auto mb-4 zoom" src="{{ url('home/img/struktur-organisiasi-pt-naga-baru-sukses-abadi.png') }}" width="500" alt="Struktur Organisiasi PT. NBSA">
            </div>
        </div>
    </div>
</section>

<!-- Milestones-->
<!-- <section class="container mb-md-5 pb-sm-3 pb-lg-4" id="story">
    <div style="border-radius: 15px 50px 30px; border-style: solid; border-color: #92a8d1; background: #ffffff; padding: 20px;">
        <br>
        <h2 class="mb-4 pb-2 text-dark text-center"><b>MILESTONES</b></h2>
        <div class="mx-auto" style="max-width: 864px;">
            <div class="steps steps-dark steps-vertical">
                <div class="step">
                    <div class="step-progress"><span class="step-progress-end"></span><span class="step-number bg-primary shadow-hover" style="color: #ffffff;" style="color: #ffffff;">1</span></div>
                    <div class="step-label">
                        <h3 class="h5 mb-2 pb-1 text-dark">2017</h3>
                        <p class="mb-0 fs-sm">Odio velit, massa augue etiam in parturient volutpat orci.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-progress"><span class="step-progress-end"></span><span class="step-number bg-primary shadow-hover" style="color: #ffffff;">2</span></div>
                    <div class="step-label">
                        <h3 class="h5 mb-2 pb-1 text-dark">2018</h3>
                        <p class="mb-0 fs-sm">Odio velit, massa augue etiam in parturient volutpat orci.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-progress"><span class="step-progress-end"></span><span class="step-number bg-primary shadow-hover" style="color: #ffffff;">3</span></div>
                    <div class="step-label">
                        <h3 class="h5 mb-2 pb-1 text-dark">2020</h3>
                        <p class="mb-0 fs-sm">Odio velit, massa augue etiam in parturient volutpat orci.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-progress"><span class="step-progress"></span><span class="step-number bg-primary shadow-hover" style="color: #ffffff;">4</span></div>
                    <div class="step-label">
                        <h3 class="h5 mb-2 pb-1 text-dark">2021</h3>
                        <p class="mb-0 fs-sm">Odio velit, massa augue etiam in parturient volutpat orci.</p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</section> -->

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