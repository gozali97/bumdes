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
  <link rel="stylesheet" href="{{ asset('/assets/admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/admin/css/style.css') }}">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'Poppins', sans-serif;">
<div class="wrapper">
    @yield('content')
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<script src="{{ asset('/assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('/assets/admin/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('/assets/admin/dist/js/demo.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
