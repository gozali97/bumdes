<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Bumdes</title>
  <link rel="icon" type="image/x-icon" href="{{asset('/assets/admin/img/bumdes-logo.png')}}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  
  @stack('select2style')

  <link rel="stylesheet" href="{{ asset('/assets/admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/admin/css/style.css') }}">
  
  {{-- summernote --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

{{-- trix --}}
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/trix/trix.css') }}">
<script type="text/javascript" src="{{ asset('/assets/admin/trix/trix.js') }}"></script>

  @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'Poppins', sans-serif;">
<div class="wrapper">
    @yield('content')
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Syncore.co.id</b>
      </div>
      <strong>Copyright &copy; 2022 <a href="">Bumdes.id</a>.</strong> All rights reserved.
    </footer>
</div>
@include('admin.layouts.script')
<script>
  $(document).on('click', '#confirm-logout', function(e) {
  e.preventDefault();
  swal({
      title: 'Keluar',
      text: 'Apakah anda akan keluar dari akun admin',
      buttons: {
        confirm : {text:'Keluar',className:'sweet-warning'},
        cancel : 'Batal'
      },
  }).then(function (result) {
      if (result) {
          window.location.href = '/logout';
      }
  });
});
</script>
@yield('js')
</body>
</html>
