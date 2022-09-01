<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bumdes</title>
  <link rel="icon" type="image/x-icon" href="{{asset('/assets/admin/img/bumdes-logo.png')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <link rel="stylesheet" href="{{asset('/assets/home/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('/assets/home/css/style.css')}}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  @yield('css')
</head>
<body>
  @include('sweetalert::alert')
    <div class="container-fluid" style="font-family: 'Poppins', sans-serif;">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{asset('/assets/home/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    @yield('js')
</body>
</html>