{{-- <div class="container-fluid" id="upper" style="background-color: rgba(0, 183, 255, 1);"> --}}
<div class="row" id="upper" style="background-color: #0EA44D;">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="d-flex justify-content-center align-items-center flex-row" style="height: 72px;">
            <p class="text-white" style="font-family: 'Poppins', sans-serif; font-weight:500; font-size:16px; height:14px;">
                Yuk konsultasikan BUM Desa anda disini!
            </p>
            <a href="https://wa.me/6285772900800" class="btn btn-primary" style="margin-left: 17px; font-family: 'Poppins', sans-serif; font-weight:500; font-size:16px; background-color:#1C8E4C; border-color:#1C8E4C; border-radius: 4px;">
                Cek sekarang!
            </a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="d-flex justify-content-center align-items-center" style="height: 72px;">
            <a href="#" onclick="upper()" class="text-white"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
</div>
{{-- </div> --}}
{{-- <header> --}}
<nav class="navbar navbar-expand-xl sticky-top navbar-light nav-menu shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo-bumdes nav-logo" src="{{ asset('/assets/home/img/bumdes.svg') }}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-menu-item" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-md-0 mb-2">
                <li class="nav-item item-nav">
                    <a class="nav-link {{ Request::is('/') ? 'aktif' : '' }}" aria-current="page" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item item-nav">
                    <a class="nav-link dropdown-toggle" onclick="pelatihan()" href="#">Pelatihan</a>
                </li>
                <li class="nav-item item-nav">
                    <a class="nav-link dropdown-toggle" onclick="pendampingan()" href="#">Pendampingan</a>
                </li>
                <li class="nav-item item-nav">
                    <a class="nav-link dropdown-toggle" onclick="layanan()" href="#">Layanan Digital</a>
                </li>
                <li class="nav-item item-nav">
                    <a class="nav-link" href="{{ url('merch')}}">Merchandise</a>
                </li>
                <li class="nav-item item-nav">
                    <a class="nav-link dropdown-toggle" onclick="berita()" href="#">Berita</a>
                </li>
                <li class="nav-item item-nav">
                    <a class="nav-link dropdown-toggle" onclick="profil()" href="#">Profil</a>
                </li>
            </ul>
            <div class="d-flex button-nav">
                <a href="{{ url('/login') }}"><button class="btn button-masuk">Masuk</button></a>
                <a href="{{ url('daftar') }}"><button class="btn button-daftar">Daftar</button></a>
            </div>
        </div>
    </div>
</nav>
{{-- </header> --}}
