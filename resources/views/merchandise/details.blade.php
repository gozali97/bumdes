@extends('layouts.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
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
                        <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                        <div class="col-12">
                            <img src="{{ asset('assets/home/img/'.$data->images)}}" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs mt-5">
                            <ul class="list-inline">
                                <li class="list-inline-item"><img src="{{ asset('assets/home/img/'.$data->images)}}" style="width: 100px" alt="Product Image"></li>
                                <li class="list-inline-item"><img src="{{ asset('assets/home/img/'.$data->images)}}" style="width: 100px" alt="Product Image"></li>
                                <li class="list-inline-item"><img src="{{ asset('assets/home/img/'.$data->images)}}" style="width: 100px" alt="Product Image"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h2 class="mt-3">{{$data->nama_produk}}</h2>
                        {{-- <ul class="list-inline">
                            <li class="list-inline-item "><img src="{{ url('assets/home/img/merchandise/star.png')}}" style="width: 30px; margin-bottom: 10px; margin-right: -8px" alt=""></li>
                        <li class="list-inline-item">
                            <h5>4.9</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5>Terjual</h5>
                        </li>
                        </ul> --}}
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                {{-- <h4 class="text-secondary"><del>Rp {{number_format($data->harga, 0,'', '.')}}</del></h4> --}}
                            </li>
                            <li class="list-inline-item">
                                <h3>Rp {{number_format($data->harga, 0,'', '.')}}</h3>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="mb-4">
                                    <span class="badge bg-danger mb-2">30%</span></h4>
                            </li>
                        </ul>
                        <h5 class="mt-4">Detail Produk</h5>
                        <p>{{$data->details}}</p>
                        <hr>
                        <ul class="list-inline">
                            <li class="list-inline-item tw-3">Tersedia :</li>
                            <li class="list-inline-item tw-3"><a type="button" href="#" class="btn btn-outline-secondary btn-sm"><img src="http://127.0.0.1:8000/assets/home/img/merchandise/shopee.png" alt=""></a></li>
                            <li class="list-inline-item tw-3"><a type="button" href="#" class="btn btn-outline-secondary btn-sm"><img src="http://127.0.0.1:8000/assets/home/img/merchandise/tokped.png" alt=""></a></li>
                        </ul>
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
@stop
