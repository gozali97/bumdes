<aside class="main-sidebar sidebar-dark-primary elevation-4 menu-aside">
    <a href="#" class="brand-link" style="border-color: white;">
        <img class="bumdes-logo" src="{{ asset('/assets/admin/img/bumdes-logo.png') }}" alt="Bumdes Logo" style="opacity: .8">
        <span class="brand-text font-weight-bold text-white">Bumdes.id</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-color: white;">
            <div class="image">
                <img src="{{ asset('/assets/admin/img/user-logo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="nama-login" style="color: white;">Admin Bumdes</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/akun-terdaftar') }}" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Akun Terdaftar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.banner') }}" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Banner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fas fa-business-time"></i>
                        <p>
                            Merchandise
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.category') }}" class="nav-link text-warning">
                                <i class="nav-icon fas fa-table nav-icon"></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.merch') }}" class="nav-link text-warning">
                                <i class="nav-icon fas fa-archive nav-icon"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fas fa-clipboard-list"></i>
                        <p>
                            Program
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.program') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>List Program</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.program.category') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Kategori Program</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fas fa-file"></i>
                        <p>
                            Arsip
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.archives') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>List Arsip</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.archives.category') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Kategori Arsip</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.event') }}" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fas fa-calendar"></i>
                        <p>
                            Agenda
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.newslatter') }}" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fas fa-newspaper"></i>
                        <p>
                            Newslatter
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fas fa-marker"></i>
                        <p>
                            Pelatihan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.training') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>List Pelatihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.training.facility') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Fasilitas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.training.material') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Materi Pelatihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.training.trainer') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Pemateri Pelatihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.training.schedule') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Jadwal Pelaksana</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.training.testimonial') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Testimoni Peserta</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fas fa-user-friends"></i>
                        <p>
                            Pendampingan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.mentorship') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>List Pendampingan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.mentorship.document') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Dokumen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.mentorship.method') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Metode Pendamping</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.mentorship.team') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Tim Pendamping</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.mentorship.alumnae') }}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Testimoni Peserta</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white;">
                        <i class="nav-icon fas fas fa-user-plus"></i>
                        <p>
                            Data Pendaftar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.training.dashboard')}}" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Pelatihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-warning">
                                <i class="far fa-share-square nav-icon"></i>
                                <p>Pendampingan</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
