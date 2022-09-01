@extends('layouts.layout')
@section('content')
   <section id="contact">

      <!-- banner utama -->
      <div class="banner-contact">
         <div class="container container py-5">
            <div class="row py-md-4 py-lg-5 py-2">
               <div class="col-md-9 col-lg-7 col-xl-5">
                  <h1 class="text-lightgreen m-0 p-0" style="font-weight: 600"><i class="fa-solid fa-phone-volume fa-rotate-by" style="--fa-rotate-angle: -45deg;"></i> Kontak kami</h1>
                  <p class="my-2">Hubungi kami untuk segala pertanyaan anda</p>
               </div>
            </div>
         </div>
      </div>

      <!-- banner secondary -->
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-5 order-md-0 order-1">
               <h5 class="my-3" style="font-weight: 600">Masih bingung atau ada pertanyaan terkait dengan Bumdes.id</h5>
               <p class="text-secondary small m-0 p-0">Seperti tentang membership, pelatihan, pendampingan, layanan digital, kerjasama dan
                  hal-hal lainnya atau ada saran serta kritik yang ingin disampaikan?</p>
            </div>
            <div class="col-12 col-md-6 col-lg-7 order-0 order-md-1 text-end">
               <img src="{{ asset('assets/home/img/banner-secondary-contact.svg') }}" alt="" class="img-fluid">
            </div>
         </div>
      </div>

      <!-- kontak -->
      <div class="bg-light">
         <div class="p-lg-5 container">
            <h5 class="my-3 text-center" style="font-weight: 600">Kamu bisa kontak langsung kami melalui</h5>
            <div class="row px-lg-5 mt-5">
               <div class="col-md-6 mb-4">
                  <div class="card h-100 rounded-5 card-contact">
                     <div class="card-body">
                        <div class="row p-3">
                           <div class="col-2 text-center">
                              {{-- <i class="fa-solid fa-phone-volume fa-rotate-by fa-xl text-lightgreen" style="--fa-rotate-angle: -45deg;"></i> --}}
                              <img src="{{ asset('assets/home/img/icon-contact/phone.svg') }}" alt="" class="img-fluid" style="height: 40px">
                           </div>
                           <div class="col-10">
                              <h5 class="m-0 p-0" style="font-weight: 600">Telepon</h5>
                              <p class="small text-secondary mx-0 my-2 p-0">Bicara langsung dengan customer service di nomor berikut ini:</p>
                              <a href="tel:(0274)5015316" class="d-block text-decoration-none small text-secondary my-2">
                                 <i class="fa-solid fa-phone me-1 text-lightgreen"></i> <span>(0274) 5015316 (Telepon)</span>
                              </a>
                              <a href="tel:6285772900800" target="_blank" class="d-block text-decoration-none small text-secondary my-2">
                                 <i class="fa-solid fa-phone me-1 text-lightgreen"></i> <span>085-772-900-800 (admin Bumdes)</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card h-100 rounded-5 card-contact">
                     <div class="card-body">
                        <div class="row p-3">
                           <div class="col-2 text-center">
                              {{-- <i class="fa-brands fa-whatsapp fa-xl text-lightgreen"></i> --}}
                              <img src="{{ asset('assets/home/img/icon-contact/wa.svg') }}" alt="" class="img-fluid" style="height: 40px">
                           </div>
                           <div class="col-10">
                              <h5 class="m-0 p-0" style="font-weight: 600">Whatsapp</h5>
                              <p class="small text-secondary mx-0 my-2 p-0">Diskusi langsung dengan customer service di nomor berikut ini:</p>
                              <a href="https://wa.me/6285772900800" target="_blank" class="d-block text-decoration-none small text-secondary my-2">
                                 <i class="fa-solid fa-phone me-1 text-lightgreen"></i> <span>085-772-900-800 (admin Bumdes)</span>
                              </a>
                              <a href="https://wa.me/6287805900800" target="_blank" class="d-block text-decoration-none small text-secondary my-2">
                                 <i class="fa-solid fa-phone me-1 text-lightgreen"></i> <span>087-805-900-800 (Meravi)</span>
                              </a>
                              <a href="https://wa.me/6287738900800" target="_blank" class="d-block text-decoration-none small text-secondary my-2">
                                 <i class="fa-solid fa-phone me-1 text-lightgreen"></i> <span>087-738-900-800 (Diana)</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card h-100 rounded-5 card-contact">
                     <div class="card-body">
                        <div class="row p-3">
                           <div class="col-2 text-center">
                              {{-- <i class="fa-solid fa-envelope fa-xl text-lightgreen"></i> --}}
                              <img src="{{ asset('assets/home/img/icon-contact/mail.svg') }}" alt="" class="img-fluid" style="height: 40px">
                           </div>
                           <div class="col-10">
                              <h5 class="m-0 p-0" style="font-weight: 600">Email</h5>
                              <p class="small text-secondary mx-0 my-2 p-0">Kirim email ke</p>
                              <a href="mailto:mail.bumdesid@gmail.com" target="_blank" class="d-block text-decoration-none text-dark" style="font-weight: 600">mail.bumdesid@gmail.com</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card h-100 rounded-5 card-contact">
                     <div class="card-body">
                        <div class="row p-3">
                           <div class="col-2 text-center">
                              {{-- <i class="fa-solid fa-clock fa-xl text-lightgreen"></i> --}}
                              <img src="{{ asset('assets/home/img/icon-contact/clock.svg') }}" alt="" class="img-fluid" style="height: 40px">
                           </div>
                           <div class="col-10">
                              <h5 class="m-0 p-0" style="font-weight: 600">Jam Operasional</h5>
                              <p class="small text-secondary mt-2 mb-0 p-0">Pada hari Senin - Jumat,</p>
                              <p class="small text-secondary m-0 p-0">Pukul 09.00 - 17.00 WIB</p>
                              <p class="small text-secondary mt-2 mb-0 p-0">Pada hari Sabtu,</p>
                              <p class="small text-secondary m-0 p-0">Pukul 09.00 - 14.00 WIB</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- map -->
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-lg-5 mb-3">
               <h5 class="my-3 ms-3" style="font-weight: 600">Kantor Kami</h5>
               <div class="row">
                  <div class="col-2 text-center">
                     {{-- <i class="fa-solid fa-location-dot fa-xl text-lightgreen"></i> --}}
                     <img src="{{ asset('assets/home/img/icon-contact/location-dot.svg') }}" alt="" class="img-fluid" style="height: 40px">
                  </div>
                  <div class="col-10">
                     <p class="text-secondary m-0 p-0">Jl. Nogotirto No. 15B, Gamping, Sleman, Daerah Istimewa Yogyakarta 55282</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 mb-3">
               <div class="overflow-hidden rounded-5">
                  <div id="location-map"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
@section('js')
   <script>
      var map = L.map('location-map').setView([-7.77595512138261, 110.33639518875079], 15);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
         maxZoom: 20,
         attribution: '© OpenStreetMap'
      }).addTo(map);
      var marker = L.marker([-7.77595512138261, 110.33639518875079]).addTo(map);
   </script>
@endsection
