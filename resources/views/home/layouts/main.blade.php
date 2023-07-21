<!DOCTYPE html>
<html lang="en">

@include("home.partial-home.head")

<body>

    <main class="page-wrapper">

        @include("home.partial-home.navbar")

        @yield("main")

    </main>

    @include("home.partial-home.footer")
    
    <div class="dynamic-cta-wrapper dynamic-cta-silver">
        <div class="dynamic-cta-holder">
            <a class="whatsapp-bt whatsapp-bt-silver" id="wa-link" href="https://wa.link/r2mnnh" target="_blank">
                <img src="{{url("home/img/logo/whatsapp.gif")}}" alt="Whatsapp NBSA">
                <div class="cta-txt">
                    <span>Contact Us NBSA</span>
                </div>
            </a>
        </div>
    </div>

    @include("home.partial-home.script")

</body>

</html>