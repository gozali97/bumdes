@extends('layouts.layout')
@section('content')
   <section id="program">
      <!-- banner -->
      <div class="container pb-5">
         <div class="row align-items-center">
            <div class="col-md-6 order-md-0 order-1">
               <h5 class="mb-3" style="font-weight: 600">Temukan pendampingan terbaikmu jadilah bagian dari <span class="text-lightgreen">100+ alumni</span></h5>
               <p class="text-secondary small mb-3 mt-0 p-0">Ikuti program pendampingan bumdes.id dengan metode pendampingan yang sudah teruji dan dikembangkan dalam pendampingan
                  kepada BUM Desa di seluruh Indonesia</p>
               <a href="#content-program" class="text-lightgreen text-decoration-none" style="font-weight: 600">Lihat Pendampingan <i class="fa-regular fa-circle-down fa-lg"></i></a>
            </div>
            <div class="col-md-6 text-end order-0 order-md-1 mb-md-0 mb-3">
               <img src="{{ asset('assets/home/img/program/banner-pendampingan-bumdes.png') }}" alt="gambar banner" class="img-fluid">
            </div>
         </div>
      </div>
      <div id="content-program">
         <div class="bg-content">
            <div class="container py-5">
               <div class="row">
                  <div class="col-12 mb-4">
                     <h5 class="text-light" style="font-weight: 600">Program Pendampingan</h5>
                     <p class="text-light small my-2 p-0">Ikuti program pendampingan kami untuk mengembangkan BUM Desa anda</p>
                  </div>
                  <!-- card list pendampingan -->
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <!-- label pendampingan unggulan -->
                        <div class="unggulan position-absolute">
                           <img src="{{ asset('/assets/home/img/program/label-unggulan.svg') }}" alt="label pendampingan unggulan" class="img-fluid">
                        </div>
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-halo-desa.png') }}" alt="gambar Pendampingan Tata Kelola Kelembagaan BUMDES" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Pendampingan Tata Kelola Kelembagaan BUMDES</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Hubungi Bumdes.id</p>
                        </div>
                        <!-- link pendampingan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <!-- label pendampingan unggulan -->
                        <div class="unggulan position-absolute">
                           <img src="{{ asset('/assets/home/img/program/label-unggulan.svg') }}" alt="label pendampingan unggulan" class="img-fluid">
                        </div>
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-saab.png') }}" alt="gambar Pendampingan Penyusunana Rencana Usaha BUMDES" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Pendampingan Penyusunana Rencana Usaha BUMDES</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Hubungi Bumdes.id</p>
                        </div>
                        <!-- link pendampingan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <!-- label pendampingan unggulan -->
                        <div class="unggulan position-absolute">
                           <img src="{{ asset('/assets/home/img/program/label-unggulan.svg') }}" alt="label pendampingan unggulan" class="img-fluid">
                        </div>
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-cku.png') }}" alt="gambar Pendampingan Tata Kelola Manajemen BUMDES" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Pendampingan Tata Kelola Manajemen BUMDES</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Hubungi Bumdes.id</p>
                        </div>
                        <!-- link pendampingan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-tanya-bumdes.png') }}" alt="gambar Pendampingan Tata Kelola Keuangan BUMDES" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Pendampingan Tata Kelola Keuangan BUMDES</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Hubungi Bumdes.id</p>
                        </div>
                        <!-- link pendampingan -->
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                     <div class="card rounded-4 position-relative h-100 border-0 p-2">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/program/img-tanya-bumdes.png') }}" alt="gambar Pendampingan Digitalisasi BUMDES" class="img-fluid w-100">
                        </div>
                        <div class="card-body list-pelatihan my-0">
                           <p class="m-0 p-0" style="font-weight: 600">Pendampingan Digitalisasi BUMDES</p>
                        </div>
                        <div class="card-footer list-pelatihan my-0 border-0 bg-transparent">
                           <hr class="dash">
                           <p class="small text-secondary m-0 p-0">Biaya kontribusi</p>
                           <p class="text-danger my-2 p-0" style="font-weight: 600">Hubungi Bumdes.id</p>
                        </div>
                        <!-- link pendampingan -->
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
                              1. Bagaimaan cara mendaftar program pelatihan?
                           </button>
                        </h6>
                        <div id="collapseMateriSatu" class="accordion-collapse collapse" data-bs-parent="#accordionFaqSatu">
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
                  <div class="accordion small mb-2" id="accordionFaqDua">
                     <div class="accordion-item rounded-5">
                        <h6 class="small accordion-header">
                           <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriDua">
                              2. Apakah sedang ada potongan Harga?
                           </button>
                        </h6>
                        <div id="collapseMateriDua" class="accordion-collapse collapse" data-bs-parent="#accordionFaqDua">
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
