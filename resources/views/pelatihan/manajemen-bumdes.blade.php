@extends('layouts.layout')
@section('content')
   <section class="bg-light py-5">
      <div class="container-md">
         <div class="row">
            <div class="col-12 small">
               <!-- kategori -->
               <p class="text-uppercase text-lightgreen mb-1" style="font-weight: 600">PELATIHAN BUM DESA</p>
            </div>
            <div class="col-md-6 col-lg-7 order-md-0 small order-1">
               <div class="col-lg-9 mt-md-0 mt-3">
                  <!-- judul pelatihan -->
                  <h3 class="fw-bold" style="line-height: 40px">Term of Refrence (TOR) Pelatihan Tatakelola dan Manajemen BUM Desa </h3>
               </div>
               <div class="d-flex my-3">
                  <div class="me-2">
                     <!-- rating -->
                     <i class="fa-solid fa-star text-yellow me-1"></i> <span class="text-muted small">4.9</span>
                  </div>
                  <div class="border-start border-2 px-2">
                     <!-- jumlah daftar peserta -->
                     <i class="me-1 fa-solid fa-user-group text-muted"></i> <span class="text-muted">10.000 Peserta terdaftar</span>
                  </div>
               </div>

               <!-- detail pelatihan -->
               <p class="text-secondary lh-lg small mt-3 mb-0">
                  Pelatihan ini ditunjukan untuk BUM Desa memberikan wawasan pengelola tentang manajemen holding, wawasan penyusunan rencana usaha BUM Desa, wawasan tentang penyusunan
                  program kerja BUM Desa sesuai PP 11 tahun 2021 & Permendesa no 3 tahun 2021. wawasan mengenai laporan pertanggungjawaban BUM Desa sesuai PP 11 tahun 2021 dan
                  Permendesa no 3 tahun 2021. Pelatihan ini dilakukan selama 2 hari berlokasi di sekolah bumdes (Bumdes.id) Jl. Nogotirto, 15B, Gamping, Sleman, D I Yogykarta.
               </p>
               <p class="small text-muted my-3">Biaya Kontribusi <span class="text-danger fw-bold">Rp. 2.500.000/Orang</span></p>
               <div class="d-flex align-items-center mt-4">
                  <a href="" class="btn btn-lightgreen btn-sm me-2 rounded-3 py-2 px-3">Daftar Sekarang</a>
                  <a href="{{ url('contact-us') }}" class="btn btn-white btn-sm rounded-3 py-2 px-3">Info Lebih Lanjut</a>
               </div>
            </div>
            <div class="col-md-6 col-lg-5 order-0 order-md-1">
               <!-- frame youtube -->
               <div class="card card-body ratio ratio-16x9 overflow-hidden rounded border-0">
                  <iframe src="https://www.youtube.com/embed/d_HlPboLRL8" title="AURORA - Runaway" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
               <!-- share -->
               <div class="col-12 text-secondary d-flex justify-content-end align-items-center mt-3">
                  <div class="me-3 small">
                     <i class="fa-solid fa-share-nodes fa-xl"></i> <span class="ms-1 small">Bagikan ke temanmu</span>
                  </div>
                  <div class="d-flex align-items-center">
                     <a href="" class="social-share me-2 link-success text-center">
                        <i class="fa-lg fa-brands fa-instagram"></i>
                     </a>
                     <a href="" class="social-share me-2 link-success text-center">
                        <i class="fa-lg fa-brands fa-facebook-f"></i>
                     </a>
                     <a href="" class="social-share me-2 link-success text-center">
                        <i class="fa-lg fa-brands fa-whatsapp"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="container-md">
         <div class="row py-4">
            <div class="col-md-5 col-lg-3 mb-md-0 mb-4">
               <!-- navigasi -->
               <div id="nav-training">
                  <div class="card card-body rounded-5 border-2">
                     <nav class="nav flex-column small mb-4" style="font-weight: 500">
                        <a class="nav-link link-dark" href="#tujuan">Tujuan Pelatihan</a>
                        <a class="nav-link link-dark" href="#fasilitas">Fasilitas Belajar</a>
                        <a class="nav-link link-dark" href="#materi">Materi Yang Akan Dipelajari</a>
                        <a class="nav-link link-dark" href="#pemateri">Pemateri Pelatihan</a>
                        <a class="nav-link link-dark" href="#jadwal">Jadwal Pelaksanaan</a>
                        <a class="nav-link link-dark" href="#biaya">Biaya Peserta</a>
                        <a class="nav-link link-dark" href="#testimoni">Apa Kata Alumni</a>
                     </nav>
                     <a href="" class="btn btn-lightgreen rounded-3 py-2">Daftar Sekarang</a>
                  </div>
               </div>
            </div>
            <div class="col-md-7 col-lg-9">
               <!-- konten navigasi -->
               <div id="nav-content-training">
                  <!-- tujuan -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="tujuan">
                     <h5 class="text-lightgreen mb-3" style="font-weight: 600">Tujuan Pelatihan</h5>
                     <ol class="small" style="color: #555">
                        <li class="mb-2">Memberikan wawasan kepada pengelola tentang manajemen holding.</li>
                        <li class="mb-2">Memberikan wawasan tentang penyusunan rencana usaha BUM Desa.</li>
                        <li class="mb-2">Memberikan wawasan tentang penyusunan program kerja BUM Desa sesuai PP 11 tahun 2021 dan Permendesa no 3 tahun 2021.</li>
                        <li class="mb-2">Memberikan wawasan mengenai laporan pertanggungjawaban BUM Desa sesuai PP 11 tahun 2021 dan Permendesa no 3 tahun 2021.</li>
                     </ol>
                  </div>

                  <!-- fasilitas -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="fasilitas">
                     <h5 class="text-lightgreen mb-4" style="font-weight: 600">Fasilitas</h5>
                     <div class="d-flex align-items-center mb-2 flex-wrap">
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Sertifikat</span>
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Softcopy Materi & Modul</span>
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Training Kit</span>
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Coffee Break & lunch</span>
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Bergabung di Jejaring Komunitas Bumdes.id</span>
                     </div>
                  </div>

                  <!-- materi -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="materi">
                     <h5 class="text-lightgreen mb-1" style="font-weight: 600">Materi Yang Akan Dipelajari</h5>
                     <p class="small my-3" style="font-size: 14px; font-weight: 400">Kamu akan dibimbing dengan pakar dan konsultan Bumdes.id yang telah berpengalahan dalam
                        pengelolaan BUM Desa</p>
                     <div class="accordion small mb-3" id="accordionMateriSatu">
                        <div class="accordion-item rounded-5">
                           <h6 class="small accordion-header">
                              <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriSatu">
                                 Manajemen Holding BUM Desa
                              </button>
                           </h6>
                           <div id="collapseMateriSatu" class="accordion-collapse collapse" data-bs-parent="#accordionMateriSatu">
                              <div class="accordion-body small">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                                 pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMateriDua">
                        <div class="accordion-item rounded-5">
                           <h6 class="small accordion-header">
                              <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriDua">
                                 Penyusunan Rencana Usaha BUM Desa
                              </button>
                           </h6>
                           <div id="collapseMateriDua" class="accordion-collapse collapse" data-bs-parent="#accordionMateriDua">
                              <div class="accordion-body small">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                                 pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMateriTiga">
                        <div class="accordion-item rounded-5">
                           <h6 class="small accordion-header">
                              <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriTiga">
                                 Penyusunan Program Kerja BUM Desa Sesuai PP 11 Tahun 2021 dan Permendesa No 3 Tahun 2021
                              </button>
                           </h6>
                           <div id="collapseMateriTiga" class="accordion-collapse collapse" data-bs-parent="#accordionMateriTiga">
                              <div class="accordion-body small">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                                 pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMateriEmpat">
                        <div class="accordion-item rounded-5">
                           <h6 class="small accordion-header">
                              <button class="accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMateriEmpat">
                                 Penyusunan Laporan Pertanggungjawaban BUM Desa Sesuai PP 11 Tahun 2021 dan Permendesa No 3 Tahun 2021
                              </button>
                           </h6>
                           <div id="collapseMateriEmpat" class="accordion-collapse collapse" data-bs-parent="#accordionMateriEmpat">
                              <div class="accordion-body small">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                                 pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- pemateri -->
               <div class="card card-body card-training rounded-5 mb-4 border-2" id="pemateri">
                  <h5 class="text-lightgreen mb-4" style="font-weight: 600">Pemateri Pelatihan</h5>
                  <div class="accordion small mb-3" id="accordionPemateriSatu">
                     <div class="accordion-item accordion-item-pemateri rounded-5">
                        <h6 class="small accordion-header">
                           <button class="btn-accordion-pemateri accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapsePemateriSatu">
                              <div class="row align-items-center w-100">
                                 <div class="col-2 col-md-3 col-lg-1">
                                    <img src="{{ asset('assets/home/img/pemateri/img-wahyuadi-anggoro-hadi.png') }}" alt="Wahyuadi Anggoro Hadi" class="rounded-circle">
                                 </div>
                                 <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                    <p class="my-1">Wahyuadi Anggoro Hadi</p>
                                    <p class="text-secondary small my-0">Kepala Desa Panggungharjo</p>
                                 </div>
                              </div>
                           </button>
                        </h6>
                        <div id="collapsePemateriSatu" class="accordion-collapse collapse" data-bs-parent="#accordionPemateriSatu">
                           <div class="accordion-body small">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                              pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion small mb-3" id="accordionPemateriDua">
                     <div class="accordion-item accordion-item-pemateri rounded-5">
                        <h6 class="small accordion-header">
                           <button class="btn-accordion-pemateri accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapsePemateriDua">
                              <div class="row align-items-center w-100">
                                 <div class="col-2 col-md-3 col-lg-1">
                                    <img src="{{ asset('assets/home/img/pemateri/img-azfa-mutiara-ahmad-pabulo.png') }}" alt="Azfa Mutiara Ahmad Pabulo" class="rounded-circle">
                                 </div>
                                 <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                    <p class="my-1">Azfa Mutiara Ahmad Pabulo</p>
                                    <p class="text-secondary small my-0">Konsultan Bumdes & UMKM</p>
                                 </div>
                              </div>
                           </button>
                        </h6>
                        <div id="collapsePemateriDua" class="accordion-collapse collapse" data-bs-parent="#accordionPemateriDua">
                           <div class="accordion-body small">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                              pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion small mb-3" id="accordionPemateriTiga">
                     <div class="accordion-item accordion-item-pemateri rounded-5">
                        <h6 class="small accordion-header">
                           <button class="btn-accordion-pemateri accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapsePemateriTiga">
                              <div class="row align-items-center w-100">
                                 <div class="col-2 col-md-3 col-lg-1">
                                    <img src="{{ asset('assets/home/img/pemateri/img-prof-gunawan-sumodiningrat.png') }}" alt="Prof. Gunawan Sumodiningrat" class="rounded-circle">
                                 </div>
                                 <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                    <p class="my-1">Prof. Gunawan Sumodiningrat</p>
                                    <p class="text-secondary small my-0">Ekonomi Senior & Guru Besar UGM</p>
                                 </div>
                              </div>
                           </button>
                        </h6>
                        <div id="collapsePemateriTiga" class="accordion-collapse collapse" data-bs-parent="#accordionPemateriTiga">
                           <div class="accordion-body small">
                              Valerie adalah Co-founder dari brand Lookats. Selain menjadi brand owner, Valerie juga menjalani karir sebagai model, influencer, host dan content
                              creator. Ia bersama kembarannya, Veronika, adalah model kembar pertama yang ikut serta dalam ajang Asia’s Next Top Model season 5.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion small mb-3" id="accordionPemateriEmpat">
                     <div class="accordion-item accordion-item-pemateri rounded-5">
                        <h6 class="small accordion-header">
                           <button class="btn-accordion-pemateri accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapsePemateriEmpat">
                              <div class="row align-items-center w-100">
                                 <div class="col-2 col-md-3 col-lg-1">
                                    <img src="{{ asset('assets/home/img/pemateri/img-agus-styanta.png') }}" alt="Agus Styanta" class="rounded-circle">
                                 </div>
                                 <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                    <p class="my-1">Agus Styanta</p>
                                    <p class="text-secondary small my-0">Direktur BUM Desa Amarta Pandowo Harjo</p>
                                 </div>
                              </div>
                           </button>
                        </h6>
                        <div id="collapsePemateriEmpat" class="accordion-collapse collapse" data-bs-parent="#accordionPemateriEmpat">
                           <div class="accordion-body small">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                              pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion small mb-3" id="accordionPemateriLima">
                     <div class="accordion-item accordion-item-pemateri rounded-5">
                        <h6 class="small accordion-header">
                           <button class="btn-accordion-pemateri accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapsePemateriLima">
                              <div class="row align-items-center w-100">
                                 <div class="col-2 col-md-3 col-lg-1">
                                    <img src="{{ asset('assets/home/img/pemateri/img-yanni-setiadiningrat.png') }}" alt="Yanni Setiadiningrat" class="rounded-circle">
                                 </div>
                                 <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                    <p class="my-1">Yanni Setiadiningrat</p>
                                    <p class="text-secondary small my-0">Skretaris Desa Ponggok</p>
                                 </div>
                              </div>
                           </button>
                        </h6>
                        <div id="collapsePemateriLima" class="accordion-collapse collapse" data-bs-parent="#accordionPemateriLima">
                           <div class="accordion-body small">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                              pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion small mb-3" id="accordionPemateriEnam">
                     <div class="accordion-item accordion-item-pemateri rounded-5">
                        <h6 class="small accordion-header">
                           <button class="btn-accordion-pemateri accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapsePemateriEnam">
                              <div class="row align-items-center w-100">
                                 <div class="col-2 col-md-3 col-lg-1">
                                    <img src="{{ asset('assets/home/img/pemateri/img-rudy-suryanto.png') }}" alt="Rudi Suryanto" class="rounded-circle">
                                 </div>
                                 <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                    <p class="my-1">Rudy Suryanto</p>
                                    <p class="text-secondary small my-0">Founder Bumde.id & Dosen FEB UMY</p>
                                 </div>
                              </div>
                           </button>
                        </h6>
                        <div id="collapsePemateriEnam" class="accordion-collapse collapse" data-bs-parent="#accordionPemateriEnam">
                           <div class="accordion-body small">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                              pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- jadwal pelaksanaan -->
               <div class="card card-body card-training rounded-5 mb-4 border-2" id="jadwal">
                  <h5 class="text-lightgreen mb-4" style="font-weight: 600">Jadwal Pelaksanaan</h5>
                  <div class="card card-body rounded-5 border-2 p-4 shadow-sm">
                     <div class="row align-items-center justify-content-between">
                        <div class="col-lg-8 border-end border-2">
                           <div class="row gy-3 small">
                              <div class="col-1 text-end">
                                 <i class="fa-solid fa-calendar-days text-lightgreen"></i>
                              </div>
                              <div class="col-11">
                                 <span>15 Juni 2022</span>
                              </div>
                              <div class="col-1 text-end">
                                 <i class="fa-solid fa-clock text-lightgreen"></i>
                              </div>
                              <div class="col-11">
                                 <span>3 Hari (pukul 09.00- 16.00 WIB)</span>
                              </div>
                              <div class="col-1 text-end">
                                 <i class="fa-solid fa-location-dot fa-lg text-lightgreen"></i>
                              </div>
                              <div class="col-11">
                                 <span>Pelatihan berlokasi di sekolah bumdes (Bumdes.id) Jl. Nogotirto, 15B, Gamping, Sleman, D I Yogykarta.</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-2">
                           <div class="small alert alert-deadline-register rounded-4 ms-2 my-0 text-center" role="alert">
                              <p class="my-0">Terakhir Pendaftaran:</p>
                              <p class="fw-bold my-0">31 Mei 2022</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- biaya -->
               <div class="card card-body card-training rounded-5 bg-green text-light mb-4 border-0 p-4" id="biaya">
                  <h5 class="mb-3">Biaya Pelatihan</h5>
                  <p class="my-0 mb-3">Biaya kontribusi peserta sebesar <span class="fw-bold">Rp. 3.000.000/Orang</span></p>
                  <div class="alert alert-price rounded-5 my-0">
                     <p class="small my-0">Catatan:</p>
                     <ul class="small my-0">
                        <li>Biaya di atas diluar biaya penginapan</li>
                        <li>Minimal Peserta 6 Orang</li>
                     </ul>
                  </div>
                  <div class="d-flex align-items-center flex-lg-nowrap mt-4 flex-wrap">
                     <a href="" class="btn btn-yellow me-lg-4 w-100 px-5 py-2">Daftar Sekarang</a>
                     <a href="{{ url('contact-us') }}" class="btn btn-lightgreen w-100 mt-lg-0 mt-2 px-5 py-2">Info Lebih Lanjut</a>
                  </div>
               </div>

               <!-- testimoni -->
               <div class="card card-body card-training rounded-5 mb-4 border-2" id="testimoni">
                  <h5 class="text-lightgreen mb-4" style="font-weight: 600">Apa Kata Alumni</h5>
                  <div id="slider-testimoni" class="carousel slide slider" data-bs-ride="carousel">
                     <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slider-testimoni" data-bs-slide-to="0" class="btn-indicator active"></button>
                        <button type="button" data-bs-target="#slider-testimoni" data-bs-slide-to="1" class="btn-indicator"></button>
                        <button type="button" data-bs-target="#slider-testimoni" data-bs-slide-to="2" class="btn-indicator"></button>
                     </div>
                     <div class="carousel-inner px-3">
                        <!-- slider item -->
                        <div class="carousel-item active">
                           <div class="card card-body px-md-4 px-lg-5 border-0 px-5 pb-5">
                              <div class="card card-body rounded-5">
                                 <div class="row align-items-center p-3">
                                    <div class="col-12 col-sm-3 col-md-12 col-lg-2 mb-md-2 text-sm-start text-md-center text-lg-start mb-sm-0 mb-md-2 mb-lg-0 mb-2 text-center">
                                       <!-- foto user -->
                                       <img src="{{ asset('assets/home/img/testimoni/img-testimoni.png') }}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-12 col-lg-10 text-sm-start text-md-center text-lg-start text-center">
                                       <!-- nama user -->
                                       <p class="fw-bold text-md-center text-lg-start my-0">Catra Ratnanggadi</p>
                                       <p class="small text-secondary text-md-center text-lg-start my-0">Universitas Gadjah mada</p>
                                    </div>
                                    <div class="col-12 text-sm-start text-md-center text-lg-start my-3 text-center">
                                       <!-- teks testimoni -->
                                       <p class="small my-0">“Setelah mengikuti program saya banyak belajar mengenai keperngurusan bumdes dan melakukan sosialisasi UMKM“</p>
                                    </div>
                                    <div class="col-12">
                                       <!-- rating -->
                                       <div class="d-flex align-items-center justify-content-center justify-content-sm-start justify-content-md-center justify-content-lg-start">
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- slider item -->
                        <div class="carousel-item">
                           <div class="card card-body px-md-4 px-lg-5 border-0 px-5 pb-5">
                              <div class="card card-body rounded-5">
                                 <div class="row align-items-center p-3">
                                    <div class="col-12 col-sm-3 col-md-12 col-lg-2 mb-md-2 text-sm-start text-md-center text-lg-start mb-sm-0 mb-md-2 mb-lg-0 mb-2 text-center">
                                       <!-- foto user -->
                                       <img src="{{ asset('assets/home/img/testimoni/img-testimoni.png') }}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-12 col-lg-10 text-sm-start text-md-center text-lg-start text-center">
                                       <!-- nama user -->
                                       <p class="fw-bold text-md-center text-lg-start my-0">Catra Ratnanggadi</p>
                                       <p class="small text-secondary text-md-center text-lg-start my-0">Universitas Gadjah mada</p>
                                    </div>
                                    <div class="col-12 text-sm-start text-md-center text-lg-start my-3 text-center">
                                       <!-- teks testimoni -->
                                       <p class="small my-0">“Setelah mengikuti program saya banyak belajar mengenai keperngurusan bumdes dan melakukan sosialisasi UMKM“</p>
                                    </div>
                                    <div class="col-12">
                                       <!-- rating -->
                                       <div class="d-flex align-items-center justify-content-center justify-content-sm-start justify-content-md-center justify-content-lg-start">
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- slider item -->
                        <div class="carousel-item">
                           <div class="card card-body px-md-4 px-lg-5 border-0 px-5 pb-5">
                              <div class="card card-body rounded-5">
                                 <div class="row align-items-center p-3">
                                    <div class="col-12 col-sm-3 col-md-12 col-lg-2 mb-md-2 text-sm-start text-md-center text-lg-start mb-sm-0 mb-md-2 mb-lg-0 mb-2 text-center">
                                       <!-- foto user -->
                                       <img src="{{ asset('assets/home/img/testimoni/img-testimoni.png') }}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-12 col-lg-10 text-sm-start text-md-center text-lg-start text-center">
                                       <!-- nama user -->
                                       <p class="fw-bold text-md-center text-lg-start my-0">Catra Ratnanggadi</p>
                                       <p class="small text-secondary text-md-center text-lg-start my-0">Universitas Gadjah mada</p>
                                    </div>
                                    <div class="col-12 text-sm-start text-md-center text-lg-start my-3 text-center">
                                       <!-- teks testimoni -->
                                       <p class="small my-0">“Setelah mengikuti program saya banyak belajar mengenai keperngurusan bumdes dan melakukan sosialisasi UMKM“</p>
                                    </div>
                                    <div class="col-12">
                                       <!-- rating -->
                                       <div class="d-flex align-items-center justify-content-center justify-content-sm-start justify-content-md-center justify-content-lg-start">
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                          <i class="fa-solid fa-star me-3 text-yellow"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                     <button class="carousel-control-prev ms-md-4 ms-lg-0" type="button" data-bs-target="#slider-testimoni" data-bs-slide="prev">
                        <i class="icon-prev text-lightgreen fa-solid fa-circle-chevron-left fa-2xl"></i>
                     </button>
                     <button class="carousel-control-next me-md-4 me-lg-0" type="button" data-bs-target="#slider-testimoni" data-bs-slide="next">
                        <i class="icon-next text-lightgreen fa-solid fa-circle-chevron-right fa-2xl"></i>
                     </button>
                  </div>
               </div>

               <!-- pelatihan-lainnya -->
               <div class="card card-body card-training rounded-5 mb-4 border-2" id="pelatihan-lainnya">
                  <h5 class="text-lightgreen mb-4" style="font-weight: 600">Pelatihan Lainnya</h5>
                  <div id="slider-owl">
                     <div class="owl-carousel owl-theme px-5 py-3">

                        <div class="card rounded-5 h-100 p-2 shadow-sm">
                           <div class="bg-yellow rounded-5">
                              <img class="img-fluid" src="{{ asset('assets/home/img/img-pelatihan-lainnya1.png') }}" alt="">
                           </div>
                           <div class="card-body small">
                              <h6 class="card-text">Penyusunan Laporan Keuangan Bumdes</h6>
                              <p class="text-muted small my-0">Biaya Kontribusi</p>
                              <p class="fw-bold text-danger mt-1 mb-0">Rp. 3000.000/Orang</p>
                           </div>
                        </div>

                        <div class="card rounded-5 h-100 p-2 shadow-sm">
                           <div class="bg-yellow rounded-5">
                              <img class="img-fluid" src="{{ asset('assets/home/img/img-pelatihan-lainnya1.png') }}" alt="">
                           </div>
                           <div class="card-body small">
                              <h6 class="card-text">Penyusunan Laporan Keuangan Bumdes</h6>
                              <p class="text-muted small my-0">Biaya Kontribusi</p>
                              <p class="fw-bold text-danger mt-1 mb-0">Rp. 3000.000/Orang</p>
                           </div>
                        </div>

                        <div class="card rounded-5 h-100 p-2 shadow-sm">
                           <div class="bg-yellow rounded-5">
                              <img class="img-fluid" src="{{ asset('assets/home/img/img-pelatihan-lainnya1.png') }}" alt="">
                           </div>
                           <div class="card-body small">
                              <h6 class="card-text">Penyusunan Laporan Keuangan Bumdes</h6>
                              <p class="text-muted small my-0">Biaya Kontribusi</p>
                              <p class="fw-bold text-danger mt-1 mb-0">Rp. 3000.000/Orang</p>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>

               <!-- kontak -->
               <div class="card card-training rounded-5 border-2" id="kontak">
                  <div class="row align-items-center">
                     <div class="col-lg-6 p-5">
                        <h5 class="text-lightgreen" style="font-weight: 600">Mau tau info semua hal seputar pelatihan & pendampingan BUM Desa?</h5>
                        <a href="https://wa.me/6287738900800" class="btn btn-lightgreen rounded-4 mt-3 px-5">Hubungi Kami</a>
                     </div>
                     <div class="col-lg-6 text-end">
                        <img src="{{ asset('assets/home/img/img-baner-kontak-pelatihan.svg') }}" alt="">
                     </div>
                  </div>
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
               800: {
                  items: 1
               },
               1000: {
                  items: 2,
               }
            },
         });
      });
      
      const btnCollapseAccordion = document.querySelectorAll(".btn-accordion-pemateri")
      btnCollapseAccordion.forEach((btn, i) => btn.addEventListener("click", () => {
         const accordionItemPemateri = document.querySelectorAll(".accordion-item-pemateri")
         accordionItemPemateri[i].classList.toggle("accordion-pemateri-active")
      }))
   </script>
@endsection
