@extends('layouts.layout')
@section('content')
<style>
    .btn-success,
    .btn-success:hover,
    .btn-success:active,
    .btn-success:visited {
        background-color: #0EA44D !important;
        border-color: #0EA44D !important;
    }

</style>
<link rel="stylesheet" href="{{ url('assets/home/css/adminlte.min.css')}}">
<!-- Content Wrapper. Contains page content -->
<div class="wrapper p-5" style="background-color: #F5F5F5">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/merch')}}">Merchandise</a></li>
                    <li class="breadcrumb-item active">{{ $data->nama_produk}}</li>
                </ol>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <section class="content">
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">{{$data->nama_produk}}</h3>
                        <div class="col-12">
                            <img src="{{$data->images[0]}}" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            @foreach ( $data->images as $image)
                            <div class="product-image-thumb active"><img src="{{$image}}" alt="Product Image"></div>
                            @endforeach
                            {{-- <div class="product-image-thumb"><img src="{{$data->images[1]}}" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="{{$data->images[2]}}" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="{{$data->images[3]}}" alt="Product Image"></div> --}}
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h2 class="mt-3">{{$data->nama_produk}}</h2>
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 style="font-weight: 600;">Rp. {{number_format($data->harga, 0,'', '.')}}
                                <span class="badge text-danger me-1" style="background-color: rgba(255, 200, 200, 1)">15%</span>
                            </h5>
                        </div>
                    </div>
                    <h5 class="mt-4">Detail Produk</h5>
                    <p style="color: #888888; font-size: 12px">{{$data->details}}</p>
                    <hr>
                    <ul class="list-inline">
                        <li class="list-inline-item">Tersedia :</li>
                        <li class="list-inline-item" style="margin-left: -10px"><a type="button" href="#" class="btn btn-sm"><img src="http://127.0.0.1:8000/assets/home/img/merchandise/shopee.png" alt=""></a></li>
                        <li class="list-inline-item" style="margin-left: -30px"><a type="button" href="#" class="btn btn-sm"><img src="http://127.0.0.1:8000/assets/home/img/merchandise/tokped.png" alt=""></a></li>
                    </ul>
                    <hr>
                    <div class="mt-4">
                        <a type="button" class="btn btn-success" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <ul class="list-inline">
                    <li class="list-inline-item">Bagikan ke:</li>
                    <li class="list-inline-item"><a href="#"><img src="{{ url('assets/home/img/merchandise/fb.png')}}" alt=""></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ url('assets/home/img/merchandise/twitter.png')}}" alt=""></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ url('assets/home/img/merchandise/wa.png')}}" alt=""></a></li>
                </ul>
            </div>
        </div>
        <!-- /.card-body -->
</div>
<!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- jQuery -->
<script src="{{ url('assets/user/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src=" {{ url('assets/user/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/user/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/user/js/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.product-image-thumb').on('click', function() {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })

</script>
@stop
