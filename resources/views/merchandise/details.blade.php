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
<!-- Content Wrapper. Contains page content -->
<div class="wrapper" style="background-color: #F5F5F5">
    <div class="content-wrapper p-4">
        <div class=" content-header">
            <div class="row mb-2">
                <div class="col-sm-6 ml-1">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/merch')}}">Merchandise</a></li>
                        <li class="breadcrumb-item active">{{ $data->nama_produk}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        <!-- /.content-header -->

        <section class="content p-2 ">
            <div class="card card-solid p-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none">{{$data->nama_produk}}</h3>
                            <div class="col-12">
                                <img src="{{$data->images[0]}}" class="product-image" alt="Product Image">
                            </div>
                            <div class="col-12 product-image-thumbs mt-5">
                                <img src="{{$data->images[1]}}" style="width: 100px" alt="Product Image">
                                <img src="{{$data->images[2]}}" style="width: 100px" alt="Product Image">
                                <img src="{{$data->images[3]}}" style="width: 100px" alt="Product Image">
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
</div>
@stop
