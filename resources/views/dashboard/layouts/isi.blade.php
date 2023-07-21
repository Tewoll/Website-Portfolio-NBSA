<!DOCTYPE html>
<html lang="en">

@include('dashboard.partial-dashboard.header')

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

  @include('sweetalert::alert')

    @include('dashboard.partial-dashboard.navbar')

    @include('dashboard.partial-dashboard.sidebar')
    
    @yield('isi')

    @include('dashboard.partial-dashboard.footer')

  </div>

  @include('dashboard.partial-dashboard.javascript')

</body>

</html>