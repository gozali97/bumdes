@extends('layouts.layout')
@section('content')
   <section id="profile">
      <div class="banner-profile">
         <div class="py-md-4 py-lg-5 container py-2" style="font-weight: 600">
            <div class="row py-md-4 py-lg-5 py-2">
               <div class="col-md-9 col-lg-7 col-xl-5">
                  <h5 class="text-lightgreen m-0 p-0" style="font-weight: 600">Cerita Kami</h5>
                  <h4 class="my-3" style="font-weight: 600">Memberikan Kontribusi untuk Indonesia Mulai Dari <span class="text-lightgreen">Sektor Desa</span></h4>

                  <!-- link youtube bumdes -->
                  <a href="https://www.youtube.com/watch?v=uDoCkM0D_jY&ab_channel=BumdesTV" target="_blank" class="btn btn-sm btn-lightgreen rounded-pill px-2"><i
                        class="fa-solid fa-circle-play"></i> Lihat Video</a>
               </div>
            </div>
         </div>
      </div>

      <div class="container my-5">
         <div class="row align-items-center">
            <div class="col-md-6">
               <!-- image profil bumdes -->
               <div class="rounded-3 overflow-hidden">
                  <img src="{{ asset('assets/home/img/img-about-us.png') }}" alt="" class="img-fluid w-100">
               </div>
            </div>
            <div class="col-md-6 mt-md-0 text-md-start mt-3 text-center">

               <!-- teks profile bumdes -->
               <h5 style="font-weight: 600">Agregator & Komunitas<br> BUM Desa terbesar no 1 di Indonesia</h5>
               <p class="text-secondary small m-0 p-0">Bumdes.id adalah program yang diinisiasi dan dikelolaoleh merapi visitama Indonesia (meravi.id) bekerjsasama dan didukung
                  komunitas ABCGFM* untuk membantu menumbuhkan, menguatkan dan mengembangkan BUM Desa di seluruh Indonesia</p>
            </div>
         </div>

         <!-- jumlah mitra, komunitas, mentoring, alumni, dan assesment bumdes -->
         <!-- *note: kalau mau mengubah isi jumlahnya, ubah bagian data-counter -->
         <div class="row justify-content-start justify-content-lg-evenly align-items-center mt-5 text-center">
            <div class="col-sm-6 col-md-4 col-lg-2 mb-4">
               <h2 id="mitra-bumdes" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="1000">0</h2>
               <p class="text-secondary small m-0 p-0">BUM Desa Mitra</p>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mb-4">
               <h2 id="member-komunitas" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="6959">0</h2>
               <p class="text-secondary small m-0 p-0">Member Komunitas</p>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mb-4">
               <h2 id="mentoring" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="84">0</h2>
               <p class="text-secondary small m-0 p-0">Mentoring & kerjasama</p>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mb-4">
               <h2 id="training-alumni" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="2765">0</h2>
               <p class="text-secondary small m-0 p-0">Training alumni</p>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mb-4">
               <h2 id="assesment-bumdes" class="text-lightgreen counter-profile" style="font-weight: 600" data-counter="1375">0</h2>
               <p class="text-secondary small m-0 p-0">Assesment BUM Desa</p>
            </div>
         </div>
      </div>

      <div class="container-fluid bg-light">
         <div class="row justify-content-center py-4">
            <div class="col-12 mb-4 text-center">
               <h5 style="font-weight: 600">Nilai Kami</h5>
               <p class="text-secondary small">kami di Bumdes.id mewujudkan nilai-nilai inti ini</p>
            </div>
            <div class="col-sm-5 col-md-4 col-lg-3 mb-3">
               <div class="card card-body rounded-4 border-0 position-relative">
                  <div class="line-yellow"></div>
                  <h6 class="card-title" style="font-weight: 600">Fungsi Utama</h6>
                  <ul class="text-secondary list-profile small mt-2">
                     <li>
                        <span style="font-weight: 600">Agregasi</span> (Menghimpun BUM Desa di seluruh Indonesia)
                     </li>
                     <li>
                        <span style="font-weight: 600">Kurasi</span> (Menilai Kesehatan & Rating Produk)
                     </li>
                     <li>
                        <span style="font-weight: 600">Inkubasi</span> (Pelatihan & Pendampingan BUM Desa)
                     </li>
                     <li>
                        <span style="font-weight: 600">Kemitraan</span> (Mengembangkan Kemitraan Multipihak)
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-5 col-md-4 col-lg-3 mb-3">
               <div class="card card-body rounded-4 border-0 position-relative">
                  <div class="line-yellow"></div>
                  <h6 class="card-title" style="font-weight: 600">Misi Kami</h6>
                  <ul class="text-secondary list-profile small mt-2">
                     <li>Menumbuhkan jiwa wirausaha sosial</li>
                     <li>Menguatkan tata kelola dan manajamen</li>
                     <li>Mengembangkan usaha BUM Desa berkelanjutan</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

      <!-- struktur organisasi -->
      <div class="container py-5">
         <div class="row">
            <div class="col-12 mb-4 text-center">
               <h5 style="font-weight: 600">Struktur Organisasi Bumdes.id</h5>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-diana.png') }}" alt="Foto Diana Septi A. , SE" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">Diana Arta, SE</p>
                        <p class="small text-secondary m-0 p-0">Direktur Eksekutif bumdes.id</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-rudy.png') }}" alt="Foto Rudi Suryanto" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">Rudy Suryanto</p>
                        <p class="small text-secondary m-0 p-0">Founder Bumdes.id</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-siti.png') }}" alt="Foto Siti Hasna Fathimah" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">Siti Hasna Fathimah</p>
                        <p class="small text-secondary m-0 p-0">Leader Konsultan Bumdes.id</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-adelia.png') }}" alt="Foto Adelia Sulistyani" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">Adelia Sulistyani</p>
                        <p class="small text-secondary m-0 p-0">Konsultan Bumdes.id</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-ayu.png') }}" alt="Foto R. Ayu Riska N." class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">R. Ayu Riska N.</p>
                        <p class="small text-secondary m-0 p-0">Konsultan Bumdes.id</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-havri.png') }}" alt="Foto Havri Ahsanul Fu'ad" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">Havri Ahsanul Fu'ad </p>
                        <p class="small text-secondary m-0 p-0">Konsultan Bumdes.id</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-rizki.png') }}" alt="Foto Rizki Pratidina" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">Rizki Pratidina</p>
                        <p class="small text-secondary m-0 p-0">Project Manager Assistant</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-uswatun.png') }}" alt="Foto Uswatun Khasanah" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">Uswatun Khasanah </p>
                        <p class="small text-secondary m-0 p-0">Project Manager Assistant</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="card card-body border-0">
                  <div class="row align-items-center">
                     <div class="col-md-3 mb-2 mb-md-0 text-center text-md-start">
                        <div class="rounded-4 overflow-hidden">
                           <img src="{{ asset('assets/home/img/struktur-org/img-denny.png') }}" alt="Foto Denny Aryudi" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-9 text-center text-md-start">
                        <p class="m-0 p-0" style="font-weight: 600">Denny Aryudi </p>
                        <p class="small text-secondary m-0 p-0">Marketing Communication Bumdes.id</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- partner -->
      <div class="container-fluid bg-light">
         <div class="container">
            <div class="row justify-content-evenly py-lg-4">
               <div class="col-12 mb-4 text-center">
                  <h5 style="font-weight: 600">Kerjasama & Kolaborasi</h5>
               </div>
               <div class="col-md-6 col-lg-3 text-center mb-3 mb-lg-0">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-bri.png') }}" alt="logo bri" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 text-center mb-3 mb-lg-0">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-bi.png') }}" alt="logo bank indonesia" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 text-center mb-3 mb-lg-0">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-sarihusada.png') }}" alt="logo sarihusada" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 text-center mb-3 mb-lg-0">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-beraucoal.png') }}" alt="logo beraucoal" class="img-fluid">
                  </div>
               </div>
            </div>

            <div class="row justify-content-center justify-content-lg-between py-lg-4">
               <div class="col-md-6 col-lg-2 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-wahana.png') }}" alt="logo wahana" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-surfaid.png') }}" alt="logo surfaid" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-sig.png') }}" alt="logo sig" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-mitrabumdes.png') }}" alt="logo mitra bumdes" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-tnp2k.png') }}" alt="logo tnp2k" class="img-fluid">
                  </div>
               </div>
            </div>

            <div class="row justify-content-center justify-content-lg-between pb-4">
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-dinaskoperasisleman.png') }}" alt="logo dinas koperasi dan umkm sleman" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-unived.png') }}" alt="logo universitas dehasen bengkulu" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-bblm.png') }}" alt="logo bblm yogyakarta" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-perhutani.png') }}" alt="logo perhutani" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-unnes.png') }}" alt="logo universitas negeri semarang" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-umpalembang.png') }}" alt="logo universitas muhammdiyah palembang" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-uad.png') }}" alt="logo universitas ahmad dahlan" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-umy.png') }}" alt="logo universitas muhammdiyah yogyakarta" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-yogya.png') }}" alt="logo yogyakarta" class="img-fluid">
                  </div>
               </div>
               <div class="col-md-3 col-lg-1 text-center mb-3">
                  <div class="bg-white overflow-hidden rounded-5">
                     <img src="{{ asset('assets/home/img/partner/logo-univpancasila.png') }}" alt="logo universitas pancasila" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
@section('js')
   <script>
      // animasi conter jumlah mitra, dll
      const counters = document.querySelectorAll('.counter-profile')
      const speed = 200

      counters.forEach(counter => {
         const updateCount = () => {
            const target = +counter.getAttribute('data-counter')
            const count = +counter.innerHTML
            const increment = target / speed

            if (count < target) {
               counter.innerHTML = Math.ceil(count + increment)
               setTimeout(updateCount, 1)
            } else {
               counter.innerHTML = target
               if (counter.id == 'mitra-bumdes') {
                  counter.innerHTML += '+'
               }

               if (counter.id == 'mentoring') {
                  counter.innerHTML += ' Mou'
               }
            }
         }

         updateCount()
      })
   </script>
@endsection
