<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Bumdes</title>
   <link rel="icon" type="image/x-icon" href="{{ asset('/assets/admin/img/bumdes-logo.png') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="{{ asset('/assets/home/css/bootstrap.css') }}" />
   <link rel="stylesheet" href="{{ asset('/assets/home/css/style.css') }}" />
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

   <!-- owl carousel -->
   <link rel="stylesheet" href="{{ asset('/assets/home/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('/assets/home/css/owl.theme.default.min.css') }}">

   <!-- leaflet css -->
   <link rel="stylesheet" href="{{ asset('/assets/home/css/leaflet.css') }}">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css" />

   @yield('css')
</head>

<body>
   <div style="font-family: 'Poppins', sans-serif;" style="background-color: #F7F7F7;">
      @include('layouts.nav')
      @include('homepage.nav-pelatihan')
      @yield('content')
      @include('layouts.footer')

      <!-- floating button -->
      <div class="position-fixed end-0 bottom-0 p-4">
         <a href="https://wa.me/6285772900800">
            <img src="{{ asset('assets/home/img/floating-wa.svg') }}" alt="" height="50px">
         </a>
      </div>

   </div>
   <script type="text/javascript" src="{{ asset('/assets/home/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('/assets/admin/plugins/jquery/jquery.min.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
      integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


   <!-- flip book js -->
   {{-- <script src="{{ asset('assets/home/3d-flip-book/js/jquery.min.js') }}"></script> --}}
   <script src="{{ asset('assets/home/3d-flip-book/js/html2canvas.min.js') }}"></script>
   <script src="{{ asset('assets/home/3d-flip-book/js/three.min.js') }}"></script>
   <script src="{{ asset('assets/home/3d-flip-book/js/pdf.min.js') }}"></script>
   <script src="{{ asset('assets/home/3d-flip-book/js/3dflipbook.min.js') }}"></script>

   <!-- owl carousel js -->
   <script src="{{ asset('assets/home/js/owl.carousel.min.js') }}"></script>

   <!-- leaflet js -->
   <script src="{{ asset('assets/home/js/leaflet.js') }}"></script>

   <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/locales-all.min.js"></script>

   <script>
      const popupEl = document.querySelector('#popup')
      if (popupEl) {
         const popup = new bootstrap.Modal(popupEl)
         window.addEventListener('load', () => popup.show())
      }


      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
         return new bootstrap.Tooltip(tooltipTriggerEl)
      })

      function upper() {
         var x = document.getElementById("upper");
         if (x.style.display === "none") {
            x.style.display = "block";
         } else {
            x.style.display = "none";
         }
      }

      function pelatihan() {
         var v = document.getElementById("pendampingan");
         var w = document.getElementById("berita");
         var x = document.getElementById("pelatihan");
         var y = document.getElementById("layanan");
         var z = document.getElementById("profil");
         if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            w.style.display = "none";
            v.style.display = "none";
         } else {
            x.style.display = "none";
         }
      }

      function layanan() {
         var v = document.getElementById("pendampingan");
         var w = document.getElementById("berita");
         var x = document.getElementById("layanan");
         var y = document.getElementById("pelatihan");
         var z = document.getElementById("profil");
         if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            w.style.display = "none";
            v.style.display = "none";
         } else {
            x.style.display = "none";
         }
      }

      function profil() {
         var v = document.getElementById("pendampingan");
         var w = document.getElementById("berita");
         var x = document.getElementById("profil");
         var y = document.getElementById("layanan");
         var z = document.getElementById("pelatihan");
         if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            w.style.display = "none";
            v.style.display = "none";
         } else {
            x.style.display = "none";
         }
      }

      function berita() {
         var v = document.getElementById("pendampingan");
         var w = document.getElementById("berita");
         var x = document.getElementById("profil");
         var y = document.getElementById("layanan");
         var z = document.getElementById("pelatihan");
         if (w.style.display === "none") {
            v.style.display = "none";
            w.style.display = "block";
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "none";
         } else {
            w.style.display = "none";
         }
      }

      function pendampingan() {
         var v = document.getElementById("pendampingan");
         var w = document.getElementById("berita");
         var x = document.getElementById("profil");
         var y = document.getElementById("layanan");
         var z = document.getElementById("pelatihan");
         if (v.style.display === "none") {
            v.style.display = "block";
            w.style.display = "none";
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "none";
         } else {
            v.style.display = "none";
         }
      }
   </script>
   @yield('js')
</body>

</html>
