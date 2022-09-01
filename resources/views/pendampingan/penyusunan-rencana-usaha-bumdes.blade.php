@extends('layouts.layout')
@section('content')
   <section class="bg-light py-5">
      <div class="container-md">
         <div class="row">
            <div class="col-12 small">
               <!-- kategori -->
               <p class="text-uppercase text-lightgreen mb-1" style="font-weight: 600">PENDAMPINGAN BUM DESA</p>
            </div>
            <div class="col-md-6 col-lg-7 order-md-0 small order-1">
               <div class="col-lg-9 mt-md-0 mt-3">
                  <!-- judul pendampingan -->
                  <h3 class="fw-bold" style="line-height: 40px">Term of Refrence (TOR) Pendampingan Penyusunan Rencana Usaha BUMDES</h3>
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

               <!-- detail pendampingan -->
               <p class="text-secondary lh-lg small mt-3 mb-0">
                  Pendampingan Penyusunan Rencana Usaga ini diberikan kepada BUMDES yang baru di bentuk, BUMDES yang ingin membuat unit usaha baru atau mengembangkan unit usaha baru. Pendampingan dilaksanakan secara online melalui zoom meeting, whatsapp group dan secara offline  dengan berkunjung ke desa.
               </p>
               <div class="d-flex align-items-center mt-4">
                  <a href="https://wa.me/6287738900800" class="btn btn-lightgreen btn-sm me-2 rounded-3 py-2 px-3">Daftar Sekarang</a>
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
                        <a class="nav-link link-dark" href="#tujuan">Tujuan</a>
                        <a class="nav-link link-dark" href="#dokumen">Dokumen Hasil Pendampingan</a>
                        <a class="nav-link link-dark" href="#metode">Metode Pendampingan</a>
                        <a class="nav-link link-dark" href="#pendamping">Tim Pendamping</a>
                        <a class="nav-link link-dark" href="#jadwal">Jadwal Pelaksanaan</a>
                        <a class="nav-link link-dark" href="#biaya">Biaya Peserta</a>
                        <a class="nav-link link-dark" href="#testimoni">Apa Kata Alumni</a>
                     </nav>
                     <a href="https://wa.me/6287738900800" class="btn btn-lightgreen rounded-3 py-2">Daftar Sekarang</a>
                  </div>
               </div>
            </div>
            <div class="col-md-7 col-lg-9">
               <!-- konten navigasi -->
               <div id="nav-content-training">
                  <!-- tujuan -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="tujuan">
                     <h5 class="text-lightgreen mb-3" style="font-weight: 600">Tujuan</h5>
                     <ol class="small" style="color: #555">
                        <li class="mb-2">Melakukan pendampingan penysunan model bisnis BUMDES seperti (Business Plan, Studi Kelayakan Usaha BUMDES).</li>
                        <li class="mb-2">Transfer Knowledge kepada Stakeholder Desa terutama Pemerintah Desa dan Pengelola BUMDES dalam mengenali bisnis ya.
                        </li>
                     </ol>
                  </div>

                  <!-- dokumen -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="dokumen">
                     <h5 class="text-lightgreen mb-4" style="font-weight: 600">Dokumen Hasil Pendampingan</h5>
                     <div class="d-flex align-items-center mb-2 flex-wrap">
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Design Thinking</span>
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Peta Potensi Desa</span>
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Laporan kegiatan</span>
                        <span class="badge rounded-pill text-secondary fw-normal me-3 mb-3 border border-2 bg-transparent px-3 py-2">Business Plan</span>
                     </div>
                  </div>

                  <!-- metode -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="metode">
                     <h5 class="text-lightgreen mb-1" style="font-weight: 600">Metode Pendampingan</h5>
                     <p class="small my-3" style="font-size: 14px; font-weight: 400">Kamu akan mendapatkan metode pedampingan oleh konsultan Bumdes.id yang telah berpengalahan dalam
                        pengelolaan BUM Desa</p>
                     <div class="accordion small mb-3" id="accordionMetodeSatu">
                        <div class="accordion-item accordion-item-metode rounded-5">
                           <h6 class="small accordion-header">
                              <button class="btn-accordion-metode accordion-button small bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMetodeSatu">
                                 1. Rapat Koordinasi & Penentuan Goal pendampingan
                              </button>
                           </h6>
                           {{-- <div id="collapseMetodeSatu" class="accordion-collapse collapse" data-bs-parent="#accordionMetodeSatu">
                              <div class="accordion-body small">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                                 pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                              </div>
                           </div> --}}
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMetodeDua">
                        <div class="accordion-item accordion-item-metode rounded-5">
                           <h6 class="small accordion-header">
                              <button class="btn-accordion-metode accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseMetodeDua">
                                 2. kickoff Pendampingan
                              </button>
                           </h6>
                           {{-- <div id="collapseMetodeDua" class="accordion-collapse collapse" data-bs-parent="#accordionMetodeDua">
                              <div class="accordion-body small">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                                 pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                              </div>
                           </div> --}}
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMetodeTiga">
                        <div class="accordion-item accordion-item-metode rounded-5">
                           <h6 class="small accordion-header">
                              <button class="btn-accordion-metode accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseMetodeTiga">
                                 3. Pra Pendampingan
                              </button>
                           </h6>
                           <div id="collapseMetodeTiga" class="accordion-collapse collapse" data-bs-parent="#accordionMetodeTiga">
                              <div class="accordion-body small">
                                 <ul>
                                    <li>Pelatihan Tata kelola kelembagaan</li>
                                    <li>Pengumpulan Dokumen</li>
                                    <li>Mengisi CKU-B </li>
                                    <li>Analisa & Review Dokumen</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMetodeEmpat">
                        <div class="accordion-item accordion-item-metode rounded-5">
                           <h6 class="small accordion-header">
                              <button class="btn-accordion-metode accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseMetodeEmpat">
                                 4. Proses Pendampingan
                              </button>
                           </h6>
                           <div id="collapseMetodeEmpat" class="accordion-collapse collapse" data-bs-parent="#accordionMetodeEmpat">
                              <div class="accordion-body small">
                                 <ul>
                                    <li>Pendampingan Pemetaan Bentang Desa</li>
                                    <li>Pendampingan Penyusunan Rencana Usaha BUM Desa</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMetodeLima">
                        <div class="accordion-item accordion-item-metode rounded-5">
                           <h6 class="small accordion-header">
                              <button class="btn-accordion-metode accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseMetodeLima">
                                 5. Pemaparan Dokumen dan Hasil Pendampingan
                              </button>
                           </h6>
                           {{-- <div id="collapseMetodeLima" class="accordion-collapse collapse" data-bs-parent="#accordionMetodeLima">
                              <div class="accordion-body small">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                                 pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
                              </div>
                           </div> --}}
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMetodeEnam">
                        <div class="accordion-item accordion-item-metode rounded-5">
                           <h6 class="small accordion-header">
                              <button class="btn-accordion-metode accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseMetodeEnam">
                                 6. Pasca Pendampingan
                              </button>
                           </h6>
                           <div id="collapseMetodeEnam" class="accordion-collapse collapse" data-bs-parent="#accordionMetodeEnam">
                              <div class="accordion-body small">
                                 <ul>
                                    <li>Riview dan BAST Hasil Pendampingan</li>
                                    <li>Penyusunan Laporan Hasil Pendampingan Rencana Usaha BUM Desa</li>
                                    <li>Cut Off Meeting</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion small mb-3" id="accordionMetodeTujuh">
                        <div class="accordion-item accordion-item-metode rounded-5">
                           <h6 class="small accordion-header">
                              <button class="btn-accordion-metode accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseMetodeTujuh">
                                 7. Launching Unit Usaha
                              </button>
                           </h6>
                           {{-- <div id="collapseMetodeTujuh" class="accordion-collapse collapse" data-bs-parent="#accordionMetodeTujuh">
                              <div class="accordion-body small">
                                 <ul>
                                    <li>Riview dan BAST Hasil Pendampingan</li>
                                    <li>Penyusunan Laporan Hasil Pendampingan Rencana Usaha BUM Desa</li>
                                    <li>Cut Off Meeting</li>
                                 </ul>
                              </div>
                           </div> --}}
                        </div>
                     </div>
                  </div>

                  <!-- pendamping -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="pendamping">
                     <h5 class="text-lightgreen mb-4" style="font-weight: 600">Tim Pendamping</h5>
                     <div class="accordion small mb-3" id="accordionPemateriSatu">
                        <div class="accordion-item accordion-item-pemateri rounded-5">
                           <h6 class="small accordion-header">
                              <button class="btn-accordion-pemateri accordion-button small bg-transparent" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapsePemateriSatu">
                                 <div class="row align-items-center w-100">
                                    <div class="col-2 col-md-3 col-lg-1">
                                       <img src="{{ asset('assets/home/img/pendamping/img-rudy.png') }}" alt="Rudy Suryanto" class="rounded-circle">
                                    </div>
                                    <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                       <p class="my-1">Rudy Suryanto</p>
                                       <p class="text-secondary small my-0">Founder Bumde.id & Dosen FEB UMY</p>
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
                                       <img src="{{ asset('assets/home/img/pendamping/img-siti.png') }}" alt="Siti Hasna Fathimah., S.Ak" class="rounded-circle">
                                    </div>
                                    <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                       <p class="my-1">Siti Hasna Fathimah., S.Ak</p>
                                       <p class="text-secondary small my-0">Lead Konsultan Bumdes.id</p>
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
                                       <img src="{{ asset('assets/home/img/pendamping/img-adelia.png') }}" alt="Adelia Sulistyani., S.Ak" class="rounded-circle">
                                    </div>
                                    <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                       <p class="my-1">Adelia Sulistyani., S.Ak</p>
                                       <p class="text-secondary small my-0">Konsultan Bumdes.id</p>
                                    </div>
                                 </div>
                              </button>
                           </h6>
                           <div id="collapsePemateriTiga" class="accordion-collapse collapse" data-bs-parent="#accordionPemateriTiga">
                              <div class="accordion-body small">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aliquid vitae, tenetur labore libero impedit sed accusamus rem reprehenderit,
                                 pariatur repudiandae corporis sapiente quos ex repellat temporibus culpa dolor modi.
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
                                       <img src="{{ asset('assets/home/img/pendamping/img-ayu.png') }}" alt="R. Ayu Riska Norcamalia., S.Ak" class="rounded-circle">
                                    </div>
                                    <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                       <p class="my-1">R. Ayu Riska Norcamalia., S.Ak</p>
                                       <p class="text-secondary small my-0">Konsultan Bumdes.id</p>
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
                                       <img src="{{ asset('assets/home/img/pendamping/img-denny.png') }}" alt="Denny Aryudi., S.Tr.I.Kom" class="rounded-circle">
                                    </div>
                                    <div class="col-6 col-md-9 col-lg-9 ms-lg-3">
                                       <p class="my-1">Denny Aryudi., S.Tr.I.Kom</p>
                                       <p class="text-secondary small my-0">Tim Media Kreatif Bumdes.id</p>
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
                  </div>

                  <!-- jadwal pelaksanaan -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="jadwal">
                     <h5 class="text-lightgreen mb-4" style="font-weight: 600">Jadwal Pelaksanaan</h5>
                     <div class="card card-body rounded-5 border-2 p-4 shadow-sm">
                        <div class="small alert alert-deadline-register rounded-4 my-0 text-center px-5" role="alert">
                           Pendampingan Tata Kelola Kelembagaan BUMDES dilaksanakan selama 2 Bulan dengan timeline pendampingan sebagai berikut :
                        </div>
                       
                        <div class="mt-4 overflow-hidden rounded text-center">
                           <img src="{{ asset('assets/home/img/jadwal-pelaksaan-pendampingan-susunan-rencana-bumdes.png') }}" alt="gambar jadwal pelaksanaan" class="img-fluid">
                        </div>
                     </div>
                  </div>

                  <!-- biaya -->
                  <div class="card card-body card-training rounded-5 bg-green text-light mb-4 border-0 p-4" id="biaya">
                     <h5 class="mb-3">Biaya Pendampingan</h5>
                     <p class="my-0 mb-3">untuk mendaptkan biaya pendampingan secara lengkap silahkan kontak kami dibawah ini.</p>
                     <div class="d-flex align-items-center flex-lg-nowrap mt-4 flex-wrap">
                        <a href="https://wa.me/6287738900800" class="btn btn-yellow me-lg-4 w-100 px-5 py-2">Daftar Sekarang</a>
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

                  <!-- pendampingan lainnya -->
                  <div class="card card-body card-training rounded-5 mb-4 border-2" id="pelatihan-lainnya">
                     <h5 class="text-lightgreen mb-4" style="font-weight: 600">Pendampingan Lainnya</h5>

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

      const btnAccordionPemateri = document.querySelectorAll(".btn-accordion-pemateri")
      btnAccordionPemateri.forEach((btn, i) => btn.addEventListener("click", () => {
         const accordionItemPemateri = document.querySelectorAll(".accordion-item-pemateri")
         accordionItemPemateri[i].classList.toggle("accordion-pemateri-active")
      }))

      const btnAccordionMetode = document.querySelectorAll(".btn-accordion-metode")
      btnAccordionMetode.forEach((btn, i) => btn.addEventListener("click", function() {
         const accordionItemMetode = document.querySelectorAll(".accordion-item-metode")
         accordionItemMetode[i].classList.toggle("accordion-metode-active")
         this.classList.toggle("text-light")
      }))
   </script>
@endsection
