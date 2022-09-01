@extends('layouts.layout')
@section('content')
   <section id="program">
      <!-- banner -->
      <div class="container pb-5">
         <div class="row align-items-center">
            <div class="col-md-6 order-md-0 order-1">
               <h5 class="mb-3" style="font-weight: 600">Temukan pelatihan terbaikmu dan jadilah bagian dari <span class="text-lightgreen">2700+ alumni pelatihan bumdes</span></h5>
               <p class="text-secondary small mb-3 mt-0 p-0">Pelajari teori dan praktik dari para narasumber, konsultan Bumdes.id dan belajar langsung dengan berkunjung ke BUM Desa
                  maju di Indonesia</p>
               <a href="#content-program" class="text-lightgreen text-decoration-none" style="font-weight: 600">Lihat Pelatihan <i class="fa-regular fa-circle-down fa-lg"></i></a>
            </div>
            <div class="col-md-6 text-end order-0 order-md-1 mb-md-0 mb-3">
               <img src="{{ asset('assets/home/img/program/banner-program-pelatihan.png') }}" alt="gambar banner" class="img-fluid">
            </div>
         </div>
      </div>
      <div id="content-program">
         <div class="bg-content">
            <div class="container py-5">
               <div class="row">
                  <div class="col-12 mb-4">
                     <h5 class="text-light" style="font-weight: 600">Program Pelatihan</h5>
                     <p class="text-light small my-2 p-0">Ikuti Pelatihan BUM Desa untuk mengasah kemampuan BUM Desa anda</p>
                  </div>
                  <!-- card list pelatihan -->
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <!-- label pelatihan unggulan -->
                        <div class="unggulan position-absolute">
                           <img src="{{ asset('/assets/home/img/program/label-unggulan.svg') }}" alt="label pelatihan unggulan" class="img-fluid">
                        </div>
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-tot.png') }}" alt="gambar pelatihan Training Of Trainer Pendamping Bumdes" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Training Of Trainer Pendamping Bumdes</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Rp. 3.000.000/Orang</p>
                        </div>
                        <!-- link pelatihan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <!-- label pelatihan unggulan -->
                        <div class="unggulan position-absolute">
                           <img src="{{ asset('/assets/home/img/program/label-unggulan.svg') }}" alt="label pelatihan unggulan" class="img-fluid">
                        </div>
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-laporan-keuangan.png') }}" alt="gambar pelatihan Penyusunan Laporan Keuangan Bumdes"
                              class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Penyusunan Laporan Keuangan Bumdes</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Rp. 2.500.000/Orang</p>
                        </div>
                        <!-- link pelatihan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <!-- label pelatihan unggulan -->
                        <div class="unggulan position-absolute">
                           <img src="{{ asset('/assets/home/img/program/label-unggulan.svg') }}" alt="label pelatihan unggulan" class="img-fluid">
                        </div>
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-digital-marketing.png') }}" alt="gambar pelatihan Digital Marketing Bumdes" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Digital Marketing Bumdes</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Rp. 2.500.000/Orang</p>
                        </div>
                        <!-- link pelatihan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-tatakelola.png') }}" alt="gambar pelatihan Tatakelola dan Manajemen Bumdes" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Tatakelola dan Manajemen Bumdes</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Rp. 2.500.000/Orang</p>
                        </div>
                        <!-- link pelatihan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-revitalisasi.png') }}" alt="gambar pelatihan Revitalisasi Bumdes Paska PP 11 TAHUN 2021"
                              class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Revitalisasi Bumdes Paska PP 11 TAHUN 2021</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Rp. 2.500.000/Orang</p>
                        </div>
                        <!-- link pelatihan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-sop.png') }}" alt="gambar pelatihan Penyusunan SOP Unit Usaha Bumdes" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Penyusunan SOP Unit Usaha Bumdes</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Rp. 2.500.000/Orang</p>
                        </div>
                        <!-- link pelatihan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-sekolah.png') }}" alt="gambar pelatihan Kunjungan Sekolah Bumdes" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Kunjungan Sekolah Bumdes</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Rp. 250.000/Orang</p>
                        </div>
                        <!-- link pelatihan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="testimoni" class="bg-light">
         <div class="container py-5">
            <h5 class="mb-5 text-center" style="font-weight: 600">Apa Kata Alumni</h5>

            <div id="slider-owl">
               <div class="owl-carousel owl-theme">
                  @foreach ($sliders as $slider)
                     <div class="row align-items-center justify-content-md-center">
                        <div class="col-3 col-md-5 col-lg-3 mb-md-2">
                           <!-- foto user -->
                           <img src="{{ asset('assets/home/img/testimoni/' . $slider['image']) }}" alt="" class="rounded-circle" style="width: 100%">
                        </div>
                        <div class="col-9 col-md-12 col-lg-9 small">
                           <!-- nama user -->
                           <p class="fw-bold text-md-center text-lg-start my-0">{{ $slider['nama'] }}</p>
                           <p class="small text-secondary text-md-center text-lg-start my-0">{{ $slider['job'] }}</p>
                        </div>
                        <div class="col-12 small my-3">
                           <!-- teks testimoni -->
                           <p class="small my-0">{{ $slider['testimoni'] }}</p>
                        </div>
                        <div class="col-12">
                           <!-- rating -->
                           <div class="d-flex align-items-center">
                              <i class="fa-solid fa-star me-3 text-yellow"></i>
                              <i class="fa-solid fa-star me-3 text-yellow"></i>
                              <i class="fa-solid fa-star me-3 text-yellow"></i>
                              <i class="fa-solid fa-star me-3 text-yellow"></i>
                              <i class="fa-solid fa-star me-3 text-yellow"></i>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
      <div id="faq">
         <div class="container pt-5">
            <h5 class="mb-5 text-center" style="font-weight: 600">Pertanyaan Seputar Pelatihan BUM Desa</h5>
            <div class="row">
               <div class="col-12">
                  <div class="accordion small mb-2" id="accordionFaqSatu">
                     <div class="accordion-item rounded-5">
                        <h6 class="small accordion-header">
                           <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriSatu">
                              1. Apakah Pelatihan Ini berbayar?
                           </button>
                        </h6>
                        <div id="collapseMateriSatu" class="accordion-collapse collapse" data-bs-parent="#accordionFaqSatu">
                           <div class="accordion-body small text-secondary">
                              Semua pelatihan di bumdes.id memiliki biaya kontribusi. peserta pelatihan nanti juga akan mendapatkan  berbagai fasilitas seperti training kit,sertifikat dan juga materi pelatihan
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <div class="accordion small mb-2" id="accordionFaqDua">
                     <div class="accordion-item rounded-5">
                        <h6 class="small accordion-header">
                           <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriDua">
                              2. Apakah biaya pelatihan sudah termasuk biaya penginapan?
                           </button>
                        </h6>
                        <div id="collapseMateriDua" class="accordion-collapse collapse" data-bs-parent="#accordionFaqDua">
                           <div class="accordion-body small text-secondary">
                              Biaya Kontribusi Pelatihan belum termasuk dengan biaya penginapan, namun bumdes.id dapat membagikan beberapa rekomendasi penginapan 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <div class="accordion small mb-2" id="accordionFaqTiga">
                     <div class="accordion-item rounded-5">
                        <h6 class="small accordion-header">
                           <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriTiga">
                              3. Kapan agenda pelatihan dimulai?
                           </button>
                        </h6>
                        <div id="collapseMateriTiga" class="accordion-collapse collapse" data-bs-parent="#accordionFaqTiga">
                           <div class="accordion-body small text-secondary">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper venenatis orci sit in. A arcu consectetur at magna ac etiam scelerisque. Pellentesque
                              proin elementum odio id adipiscing. Mauris sodales nulla sit egestas venenatis eu sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper
                              venenatis orci sit in. A arcu consectetur at magna ac etiam scelerisque. Pellentesque proin elementum odio id adipiscing. Mauris sodales nulla sit
                              egestas venenatis eu sem.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <div class="accordion small mb-2" id="accordionFaqEmpat">
                     <div class="accordion-item rounded-5">
                        <h6 class="small accordion-header">
                           <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriEmpat">
                              4. Pelatihan unggulan apa yang ada?
                           </button>
                        </h6>
                        <div id="collapseMateriEmpat" class="accordion-collapse collapse" data-bs-parent="#accordionFaqEmpat">
                           <div class="accordion-body small text-secondary">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper venenatis orci sit in. A arcu consectetur at magna ac etiam scelerisque. Pellentesque
                              proin elementum odio id adipiscing. Mauris sodales nulla sit egestas venenatis eu sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper
                              venenatis orci sit in. A arcu consectetur at magna ac etiam scelerisque. Pellentesque proin elementum odio id adipiscing. Mauris sodales nulla sit
                              egestas venenatis eu sem.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <div class="accordion small mb-2" id="accordionFaqLima">
                     <div class="accordion-item rounded-5">
                        <h6 class="small accordion-header">
                           <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriLima">
                              5. Program pelatihan dilakukan secara online/Offline?
                           </button>
                        </h6>
                        <div id="collapseMateriLima" class="accordion-collapse collapse" data-bs-parent="#accordionFaqLima">
                           <div class="accordion-body small text-secondary">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper venenatis orci sit in. A arcu consectetur at magna ac etiam scelerisque. Pellentesque
                              proin elementum odio id adipiscing. Mauris sodales nulla sit egestas venenatis eu sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper
                              venenatis orci sit in. A arcu consectetur at magna ac etiam scelerisque. Pellentesque proin elementum odio id adipiscing. Mauris sodales nulla sit
                              egestas venenatis eu sem.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="kontak">
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
                  items: 2,
               },
               1000: {
                  items: 3,
               }
            },
            onInitialized: function(e) {
               let element = $(e.target)
               element.find('.owl-item').addClass('card card-body h-100 rounded-5')
            }
         });
      });
   </script>
@endsection
