@extends('home.layouts.main')

@section('main')

<!-- Breadcrumb-->
<div class="container mt-5 mb-md-4 pt-5">
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ __('navbar.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('navbar.contact') }}</li>
        </ol>
    </nav>
</div>

<!-- Hero-->
<section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
    <div class="row align-items-md-start align-items-center gy-4">
        <div class="col-lg-6 col-md-6">
            <div class="card border-0 bg-secondary p-sm-3 p-2">
                <div class="card-body m-1">
                    <p style="text-align: center;"><i class="fi-clock my-0 me-2 align-middle opacity-70"></i><b> {{ __('footer.working') }}</b><br>{{ __('footer.hari') }}: 08:30 - 17:00<br>{{ __('footer.hari2') }}: 08:30 - 15:00</p>
                    <p style="text-align: center;"><i class="fi-map-pin my-0 me-2 align-middle opacity-70"></i><b>{{ __('footer.jalan') }}:</b><br>Jl. Kapten Marzuki No.29D, 20 Ilir D. III, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30121</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card border-0 bg-secondary p-sm-3 p-2">
                <div class="card-body m-1">
                    <div class="text-center">
                        <!-- <img src="https://www.ptnbsa.com/wp-content/uploads/2022/07/clock.png" width="30px"><b> Working Hours</b> -->
                        <p style="text-align: center; margin-top: 1%;"><i class="fi-phone my-0 me-2 align-middle opacity-70"></i><b>Phone : </b><a href="tel:+62711375299" target="_blank">+62 711 375299</p></a>
                        <p style="text-align: center; margin-top: 1%;"><i class="fi-fax my-0 me-2 align-middle opacity-70"></i></i><b>FAX : </b><a href="fax:+62711375299" target="_blank">+62 711 375299</p></a>
                        <p style="text-align: center; margin-top: 1%;"><i class="fi-whatsapp my-0 me-2 align-middle opacity-70"></i><b>Whatsapp : </b><a href="https://wa.me/+6281273088088/" target="_blank">+62 812 7308 8088</p></a>
                        <p style="text-align: center; margin-top: 1%; margin-bottom: 4%;"><i class="fi-mail my-0 me-2 align-middle opacity-70"></i><b>Email : </b><a href="mailto:nagabarusuksesabadi@gmail.com" target="_blank">nagabarusuksesabadi@gmail.com</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact cards-->
<section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
    <div class="row g-3">
        <!-- Item-->
        <div class="col-md-3"><a class="icon-box card card-hover h-100" href="https://www.instagram.com/nagabarusuksesabadi/" target="_blank">
                <div class="card-body">
                    
                        <div class="icon-box-media rounded-circle text-start"><i class="fi-instagram"></i></div><span class="d-inline-block mb-1 text-body">Instagram</span>
                        <h3 class="h5 icon-box-title mb-0 opacity-90">@nagabarusuksesabadi</h3>
                    
                </div>
            </a>
        </div>
        <!-- Item-->
        <div class="col-md-3"><a class="icon-box card card-hover h-100" href="https://www.facebook.com/nagabarusuksesabadi/" target="_blank">
                <div class="card-body">
                    <div class="icon-box-media rounded-circle text-start"><i class="fi-facebook"></i></div><span class="d-inline-block mb-1 text-body">Facebook</span>
                    <h3 class="h5 icon-box-title mb-0 opacity-90">nagabarusuksesabadi</h3>
                </div>
            </a></div>
        <!-- Item-->
        <div class="col-md-3"><a class="icon-box card card-hover h-100" href="https://www.twitter.com/ptnbsa/" target="_blank">
                <div class="card-body">
                    <div class="icon-box-media rounded-circle text-start"><i class="fi-twitter"></i></div><span class="d-inline-block mb-1 text-body">Twitter</span>
                    <h3 class="h5 icon-box-title mb-0 opacity-90">@ptnbsa</h3>
                </div>
            </a></div>
        <!-- Item-->
        <div class="col-md-3"><a class="icon-box card card-hover h-100" href="https://www.linkedin.com/in/naga-baru-sukses-abadi-638ab9230" target="_blank">
                <div class="card-body">
                    <div class="icon-box-media rounded-circle text-start"><i class="fi-linkedin"></i></div><span class="d-inline-block mb-1 text-body">Linkedin</span>
                    <h3 class="h5 icon-box-title mb-0 opacity-90">@naga-baru-sukses-abadi</h3>
                </div>
            </a></div>
    </div>
</section>

<section class="container pb-4 pt-1 mb-5">
    <div class="bg-secondary rounded-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.306081083073!2d104.74428093096273!3d-2.97059139853947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75d94bc70023%3A0xf2b4e4e566ce300d!2sJl.%20Kapten%20Marzuki%20No.29d%2C%2020%20Ilir%20D.%20III%2C%20Kec.%20Ilir%20Tim.%20I%2C%20Kota%20Palembang%2C%20Sumatera%20Selatan%2030121!5e0!3m2!1sid!2sid!4v1661482683703!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


@endsection