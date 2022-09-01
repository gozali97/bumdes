@extends('layouts.layout')
@section('content')
   <section id="halo-desa">
      <div class="bg-fa">
         <div class="container py-5">
            <div class="row">
               <div class="col-lg-6 order-lg-0 small order-1">
                  <p class="text-uppercase text-lightgreen mb-1" style="font-weight: 600">LAYANAN DIGITAL</p>
                  <div class="col-lg-7 mt-md-0 mt-3">
                     <!-- judul halo desa -->
                     <h3 style="line-height: 40px; font-weight: 600">Halo Desa</h3>
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

                  <!-- detail halo desa -->
                  <p class="text-secondary lh-lg mt-3 mb-0">
                     Halo Desa merupakan layanan konsutasi daring untuk Desa dengan para konsultan Bumdes.id yang telah berpengalaman. Anda dapat berkonsultasi sesuai tema yang kami
                     berikan tentang kendala yang di hadapi yang ada pada Desa anda.
                  </p>
                  <div class="d-flex align-items-center mt-3">
                     <a href="https://wa.me/6285772900800" class="btn btn-lightgreen btn-sm me-2 rounded-3 py-2 px-3">Daftar Sekarang</a>
                     <a href="{{ url('contact-us') }}" class="btn btn-white btn-sm rounded-3 py-2 px-3">Info Lebih Lanjut</a>
                  </div>
               </div>
               <div class="col-lg-6 order-0 order-lg-1">
                  <!-- banner halo desa -->
                  <img src="{{ asset('assets/home/img/layanan-digital/banner-halo-desa.png') }}" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>

      <div class="bg-f7">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-md-6 col-lg-6 mb-md-0 mb-3">
                  <img src="{{ asset('assets/home/img/layanan-digital/img-section1-halo-desa.png') }}" alt="" class="img-fluid">
               </div>
               <div class="col-md-6 col-lg-5">
                  <h3 style="line-height: 40px; font-weight: 600;">Konsultasikan masalah anda seputar Desa</h3>
                  <ul class="text-secondary small list-unstyled">
                     <li class="mt-3"><img src="{{ asset('assets/home/img/layanan-digital/icon-users.svg') }}" alt="" class="img-fluid me-1"> Konsultasi Kelembagaan</li>
                     <li class="mt-3"><img src="{{ asset('assets/home/img/layanan-digital/icon-calendar.svg') }}" alt="" class="img-fluid me-1"> Konsultasi rencana Usaha
                     </li>
                     <li class="mt-3"><img src="{{ asset('assets/home/img/layanan-digital/icon-rupiah.svg') }}" alt="" class="img-fluid me-1"> Konsultasi Keuangan</li>
                     <li class="mt-3"><img src="{{ asset('assets/home/img/layanan-digital/icon-eq.svg') }}" alt="" class="img-fluid me-1"> Konsultasi Managemen</li>
                     <li class="mt-3"><img src="{{ asset('assets/home/img/layanan-digital/icon-chart.svg') }}" alt="" class="img-fluid me-1"> Konsultasi Digitalisasi</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="bg-fa">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-md-6 col-lg-5 order-md-0 order-1">
                  <h3 style="line-height: 40px; font-weight: 600;">Punya pertanyaan lebih lanjut yuk konsultasikan dengan expert kami?</h3>
                  <p class="small text-secondary m-0 p-0">Layanan ini kami sediakan untuk anda agar dapat berkomunikasi secara daring melalui zoom dengan para expert dan konsultan
                     milik Bumdes.id.</p>
               </div>
               <div class="col-md-6 col-lg-6 mb-md-0 text-md-end order-0 order-md-0 mb-md-0 mb-3 mb-3">
                  <img src="{{ asset('assets/home/img/layanan-digital/img-section2-tanya-bumdes.png') }}" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>

      <div class="bg-f7" id="output">
         <div class="container py-5">
            <div class="row">
               <div class="col-12 text-center">
                  <h3 class="mb-5" style="line-height: 40px; font-weight: 600;">Layanan Konsultasi kami</h3>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card card-body rounded-5 h-100 shadow-sm">
                     <h5 class="mb-2 p-0" style="font-weight: 600;">
                        <img src="{{ asset('assets/home/img/layanan-digital/icon-big-calendar.svg') }}" alt="" class="img-fluid me-1"> Jadwal pelaksanaan
                     </h5>
                     <p class="my-0 py-0 px-5 mx-2 text-lightgreen" style="font-weight: 600"><i class="fa-solid fa-clock me-1"></i> Setiap hari jumat</p>
                     <p class="mb-2 mt-1 py-0 px-5 mx-2 text-secondary"><i class="fa-solid fa-circle me-1 text-white"></i> Pukul: 14.00-16.30 WIB</p>
                     
                     <p class="my-0 py-0 px-5 mx-2 text-lightgreen" style="font-weight: 600"><i class="fa-solid fa-money-bill-wave me-1"></i> Free Online</p>
                     <p class="mb-2 mt-1 py-0 px-5 mx-2 text-secondary"><i class="fa-solid fa-circle me-1 text-white"></i> Tidak dipungut biaya</p>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card card-body rounded-5 h-100 shadow-sm">
                     <h5 class="mb-2 p-0" style="font-weight: 600;">
                        <img src="{{ asset('assets/home/img/layanan-digital/icon-big-users.svg') }}" alt="" class="img-fluid me-1"> Kuota Konsultasi
                     </h5>
                     <p class="my-0 py-0 px-5 mx-2 text-lightgreen" style="font-weight: 600"><i class="fa-solid fa-user-group"></i> Jumlah Desa</p>
                     <p class="mb-2 mt-1 py-0 px-5 mx-2 text-secondary"><i class="fa-solid fa-circle me-1 text-white"></i> Hanya melayani 10 Desa/Hari</p>
                     
                     <p class="my-0 py-0 px-5 mx-2 text-lightgreen" style="font-weight: 600"><i class="fa-solid fa-clock me-1"></i> Durasi Konsultasi</p>
                     <p class="mb-2 mt-1 py-0 px-5 mx-2 text-secondary"><i class="fa-solid fa-circle me-1 text-white"></i> 30-45 Menit/ Desa</p>
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
