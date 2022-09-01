@extends('layouts.layout')
@section('content')
   <section id="cku">
      <div class="bg-fa">
         <div class="container py-5">
            <div class="row">
               <div class="col-lg-6 order-lg-0 small order-1">
                  <p class="text-uppercase text-lightgreen mb-1" style="font-weight: 600">LAYANAN DIGITAL</p>
                  <div class="col-lg-7 mt-md-0 mt-3">
                     <!-- judul cku -->
                     <h3 style="line-height: 40px; font-weight: 600">Cek Kesehatan Usaha BUMDES (CKU-B)</h3>
                  </div>
                  <div class="d-flex my-3">
                     <div class="me-2">
                        <!-- rating -->
                        <i class="fa-solid fa-star text-yellow me-1"></i> <span class="text-muted small">4.9</span>
                     </div>
                     <div class="border-start border-2 px-2">
                        <!-- jumlah daftar peserta -->
                        <i class="me-1 fa-solid fa-user-group text-muted"></i> <span class="text-muted">1.375 Peserta terdaftar</span>
                     </div>
                  </div>

                  <!-- detail cku -->
                  <p class="text-secondary lh-lg mt-3 mb-0">
                     Cek kesehatan usaha bumdes (CKU-B) merupakan sebuah teknologi baru yang dikembangkan oleh Syncore Indonesia dan Bumdes.id untuk melihat kelemahan dan kekuatan
                     usaha
                     BUM Desa secara cepat. Layanan ini juga akan memberikan rekomendasi umum untuk program pendampingan. CKU-B juga dapat menentukan rating dan tipologi BUM Desa
                     anda.
                  </p>
                  <div class="d-flex align-items-center mt-3">
                     <a href="" class="btn btn-lightgreen btn-sm me-2 rounded-3 py-2 px-3">Coba sekarang</a>
                     <a href="" class="btn btn-white btn-sm rounded-3 py-2 px-3"><i class="fa-solid fa-circle-play fa-lg"></i> Lihat Demo</a>
                  </div>
               </div>
               <div class="col-lg-6 order-0 order-lg-1">
                  <!-- banner cku -->
                  <img src="{{ asset('assets/home/img/layanan-digital/banner-cku.svg') }}" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
      <div class="bg-f7">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-md-6 col-lg-6 mb-3 mb-md-0">
                  <img src="{{ asset('assets/home/img/layanan-digital/img-section-cku.svg') }}" alt="" class="img-fluid">
               </div>
               <div class="col-md-6 col-lg-5">
                  <h3 style="line-height: 40px; font-weight: 600;">Rangkuman kondisi<br> Kesehatan BUM Desa anda</h3>
                  <p class="small text-secondary m-0 p-0">Dapatkan rangkuman informasi dan rekomendasi<br> mengenai kesehatan BUM Desa anda sekarang</p>
                  <ul class="list-profile text-secondary small mb-4">
                     <li class="mt-3">Klaster Bintang BUM Desa</li>
                     <li class="mt-3">Grafik Cek Kesehatan Usaha</li>
                     <li class="mt-3">Analisis Kesehatan BUM Desa</li>
                     <li class="mt-3">Sertfikat Cek Kesahatan Usaha</li>
                  </ul>
                  <a href="" class="btn btn-lightgreen rounded-3">Unduh Contoh Rangkuman</a>
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
