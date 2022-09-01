@extends('layouts.layout')
@section('content')
   <section id="saab">
      <div class="bg-fa">
         <div class="container py-5">
            <div class="row">
               <div class="col-lg-6 order-lg-0 small order-1">
                  <p class="text-uppercase text-lightgreen mb-1" style="font-weight: 600">LAYANAN DIGITAL</p>
                  <div class="col-lg-7 mt-md-0 mt-3">
                     <!-- judul saab -->
                     <h3 style="line-height: 40px; font-weight: 600">Sistem Aplikasi Akuntansi BUMDES ( SAAB )</h3>
                  </div>
                  <div class="d-flex my-3">
                     <div class="me-2">
                        <!-- rating -->
                        <i class="fa-solid fa-star text-yellow me-1"></i> <span class="text-muted small">4.9</span>
                     </div>
                     <div class="border-start border-2 px-2">
                        <!-- jumlah daftar peserta -->
                        <i class="me-1 fa-solid fa-user-group text-muted"></i> <span class="text-muted">10,000 Peserta terdaftar</span>
                     </div>
                  </div>

                  <!-- detail saab -->
                  <p class="text-secondary lh-lg mt-3 mb-0">
                     Sistem Aplikasi Akuntansi BUMDES ( SAAB ) adalah sistem aplikasi akuntansi yang memudahkan BUMDes melakukan pencatatan keuangan untuk membantu memudahkan dalam
                     melakukan pelaporan keuangan. Aplikasi ini bisa menjadi alat transparansi anggaran dalam proses pertanggungjawaban.
                  </p>
                  <div class="d-flex align-items-center mt-3">
                     <a href="https://wa.me/6287738900800" target="_blank" class="btn btn-lightgreen btn-sm me-2 rounded-3 py-2 px-3">Coba sekarang</a>
                     <a href="https://www.youtube.com/watch?v=FhNnV5HP0v8&ab_channel=bumdes.id" target="_blank" class="btn btn-white btn-sm rounded-3 py-2 px-3"><i class="fa-solid fa-circle-play fa-lg"></i> Lihat Demo</a>
                  </div>
               </div>
               <div class="col-lg-6 order-0 order-lg-1">
                  <!-- banner saab -->
                  <img src="{{ asset('assets/home/img/layanan-digital/banner-saab.svg') }}" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>

      <div class="bg-f7">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-md-6 col-lg-6 mb-md-0 mb-3">
                  <img src="{{ asset('assets/home/img/layanan-digital/img-section1-saab.png') }}" alt="" class="img-fluid">
               </div>
               <div class="col-md-6 col-lg-5">
                  <h3 style="line-height: 40px; font-weight: 600;">Mencatat laporan sesuai dengan unit usaha, program dan kegiatan</h3>
                  <p class="small text-secondary m-0 p-0">Membuat catatan laporan akuntansi sesuai kebutuhan. Tidak perlu repot membuat laporan secara konvensional karena software
                     bisa diedit sesuai kebutuhan anda.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="bg-fa">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-md-6 col-lg-5 order-1 order-md-0">
                  <h3 style="line-height: 40px; font-weight: 600;">Mencatat transaksi penerimaan, pengeluaran dan laporan SPJ</h3>
                  <p class="small text-secondary m-0 p-0">Setiap catatan traksaksi penerimaan, pengeluaran dan Laporan SPJ harus dibuat serinci mungkin, Aplikasi SAAB akan membantu membuat laporan menjadi lebih mudah.</p>
               </div>
               <div class="col-md-6 col-lg-6 text-md-end order-0 order-md-0 mb-md-0 mb-3">
                  <img src="{{ asset('assets/home/img/layanan-digital/img-section2-saab.png') }}" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
      <div class="bg-f7">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-md-6 col-lg-6 mb-md-0 mb-3">
                  <img src="{{ asset('assets/home/img/layanan-digital/img-section3-saab.png') }}" alt="" class="img-fluid">
               </div>
               <div class="col-md-6 col-lg-5">
                  <h3 style="line-height: 40px; font-weight: 600;">Menggunakan mekanisme pengadaan & pengeluaran langsung sesuai dengan aturan pemerintahan</h3>
                  <p class="small text-secondary m-0 p-0">Format mekanismes dari aplikasi SAAB sudah sesuai dengan peraturan terbaru dari pemerintah sehingga siap digunakan untuk
                     membuat laporan di akhir periode.</p>
               </div>
            </div>
         </div>
      </div>

      <div class="bg-fa" id="output">
         <div class="container py-5">
            <div class="row">
               <div class="col-12 text-center">
                  <h3 class="mb-5" style="line-height: 40px; font-weight: 600;">Output yang dihasilkan lainnya</h3>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card card-body rounded-5 h-100 shadow-sm">
                     <div class="row">
                        <div class="col-2">
                           <div class="overflow-hidden rounded-3">
                              <img src="{{ asset('assets/home/img/layanan-digital/icon-output1.svg') }}" alt="" class="img-fluid w-100">
                           </div>
                        </div>
                        <div class="col-10">
                           <h4 class="mb-2 p-0" style="font-weight: 600;">Membuat laporan anggaran.</h4>
                           <p class="text-secondary m-0 p-0 small">Laporan anggaran memakan banyak waktu jika dikerjakan secara konvensional, Aplikasi SAAB bisa digunakna untuk membuat
                              laporan anggaran BUM Desa dengan cepat.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card card-body rounded-5 h-100 shadow-sm">
                     <div class="row">
                        <div class="col-2">
                           <div class="overflow-hidden rounded-3">
                              <img src="{{ asset('assets/home/img/layanan-digital/icon-output2.svg') }}" alt="" class="img-fluid w-100">
                           </div>
                        </div>
                        <div class="col-10">
                           <h4 class="mb-2 p-0" style="font-weight: 600;">Mampu menghasilkan laporan keuangan.</h4>
                           <p class="text-secondary m-0 p-0 small">( LRA, Lap. Laba/Rugi, Laporan Perubahan Ekuitas, Neraca, Laporan Arus Kas dan Catatan Atas Laporan Keuangan )</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="bg-f7" id="benefit">
         <div class="container py-5">
            <div class="row">
               <div class="col-12 text-center">
                  <h3 class="mb-5" style="line-height: 40px; font-weight: 600;">Apa saja yang kamu dapatkan</h3>
               </div>
               <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card rounded-5 h-100 p-2 shadow-sm">
                     <div class="rounded-5">
                        <img class="w-100 img-fluid" src="{{ asset('assets/home/img/layanan-digital/img-benefit1.png') }}" alt="">
                     </div>
                     <div class="card-body small">
                        <h6 class="card-text" style="font-weight: 600">Pendampingan Jarak Jauh Online selama 1 tahun</h6>
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card rounded-5 h-100 p-2 shadow-sm">
                     <div class="rounded-5">
                        <img class="w-100 img-fluid" src="{{ asset('assets/home/img/layanan-digital/img-benefit2.png') }}" alt="">
                     </div>
                     <div class="card-body small">
                        <h6 class="card-text" style="font-weight: 600">Software SAAB 1 tahun masa kontrak</h6>
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card rounded-5 h-100 p-2 shadow-sm">
                     <div class="rounded-5">
                        <img class="w-100 img-fluid" src="{{ asset('assets/home/img/layanan-digital/img-benefit3.png') }}" alt="">
                     </div>
                     <div class="card-body small">
                        <h6 class="card-text" style="font-weight: 600">Coaching Online 2x ( Live Zoom )</h6>
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="bg-fa" id="layanan-digital-lainnya">
         <div class="container py-5">
            <div class="row">
               <div class="col">
                  <h3 class="mb-3" style="line-height: 40px; font-weight: 600;">Dapatkan Layanan digital lainnya</h3>
                  <div id="slider-owl">
                     <div class="owl-carousel owl-theme py-3">

                        <div class="card rounded-5 h-100 p-2 shadow-sm">
                           <div class="bg-yellow rounded-5">
                              <img class="img-fluid" src="{{ asset('assets/home/img/layanan-digital/slider-1.png') }}" alt="">
                           </div>
                           <div class="card-body">
                              <h5 class="card-text" style="font-weight: 600">Sistem Aplikasi Akuntansi BUMDES (SAAB)</h5>
                              <p class="text-muted small my-0">Sistem aplikasi akuntansi yang dapat memudahkan BUMDes dalam melakukan pencatatan keuangan.</p>
                              <a href="" class="stretched-link"></a>
                           </div>
                        </div>

                        <div class="card rounded-5 h-100 p-2 shadow-sm">
                           <div class="bg-yellow rounded-5">
                              <img class="img-fluid" src="{{ asset('assets/home/img/layanan-digital/slider-2.png') }}" alt="">
                           </div>
                           <div class="card-body">
                              <h5 class="card-text" style="font-weight: 600">Halo Desa</h5>
                              <p class="text-muted small my-0">Layanan untuk konsultasi online menganai Desa & BUM Desa</p>
                              <a href="" class="stretched-link"></a>
                           </div>
                        </div>

                        <div class="card rounded-5 h-100 p-2 shadow-sm">
                           <div class="bg-yellow rounded-5">
                              <img class="img-fluid" src="{{ asset('assets/home/img/layanan-digital/slider-3.png') }}" alt="">
                           </div>
                           <div class="card-body">
                              <h5 class="card-text" style="font-weight: 600">Cek Kesehatan Usaha BUMDES (CKU-B)</h5>
                              <p class="text-muted small my-0">Layanan untuk melihat kelemahan dan kekuatan usaha BUM Desa secara cepat.</p>
                              <a href="" class="stretched-link"></a>
                           </div>
                        </div>

                        <div class="card rounded-5 h-100 p-2 shadow-sm">
                           <div class="bg-yellow rounded-5">
                              <img class="img-fluid" src="{{ asset('assets/home/img/layanan-digital/slider-4.png') }}" alt="">
                           </div>
                           <div class="card-body">
                              <h5 class="card-text" style="font-weight: 600">Tanya Bumdes</h5>
                              <p class="text-muted small my-0">Layanan untuk tanya jawab menganai Desa & BUM Desa</p>
                              <a href="" class="stretched-link"></a>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- kontak -->
      <div class="bg-f7">
         <div class="container py-5">
            <div class="card card-training rounded-5 border-2" id="kontak">
               <div class="row align-items-center">
                  <div class="col-lg-6 p-5">
                     <h5 class="text-lightgreen" style="font-weight: 600">Punya pertanyaan lebih lanjut yuk konsultasikan dengan expert kami?</h5>
                     <a href="{{ url('contact-us') }}" class="btn btn-lightgreen rounded-4 mt-3 px-5">Hubungi Kami</a>
                  </div>
                  <div class="col-lg-6 text-end">
                     <img src="{{ asset('assets/home/img/img-baner-kontak-pelatihan.svg') }}" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
@section('js')
   <script>
      $(document).ready(function() {
         $(".owl-carousel").owlCarousel({
            rewind: true,
            margin: 20,
            responsiveClass: true,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
            responsive: {
               0: {
                  items: 1,
               },
               600: {
                  items: 1,
               },
               800: {
                  items: 2
               },
               1000: {
                  items: 3,
               }
            },
         });
      });
   </script>
@endsection
