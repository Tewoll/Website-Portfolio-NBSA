<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link" target="_blank"><i class="nav-icon fas fa-home"></i> Halaman Frontend</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/belakang" class="nav-link"><i class="nav-icon fas fa-laptop-house"></i> Halaman Utama Dashboard</a>
        </li>
    </ul>

    <!-- Logout navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a type="button" class="nav-link" data-toggle="modal" data-target="#modal-keluar">Log Out&nbsp;<i class="fas fa-sign-out-alt"></i></a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<div class="modal fade" id="modal-keluar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Logout</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apa anda yakin logout ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();" type="button" class="btn btn-primary btn-sm float-md-right"> Logout</a>

                </form>
            </div>
        </div>
    </div>
</div>