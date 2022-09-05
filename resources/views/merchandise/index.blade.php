@extends('layouts.layout')
@section('content')
<section id="banner-merch">
    <div class="card">
        <img src="{{ url('assets/home/img/merchandise/img.png') }}" class="card-img img-fluid d-block w-100" />
        <div class="card-img-overlay">
            <div class="container mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <h1 class="card-title">Beli Merchandise Bumdes.id</h1>
                            <p class="card-subtitle text-secondary small m-0 p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque condimentum lacinia sed sed lacus. Pulvinar diam morbi
                                amet libero suspendisse enim odio donec ullamcorper.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="form-search">
    <div class="bg-f7">
        <div class="container py-2">
            <div class="card card-body rounded-5">
                <h5 class="mt-0 mb-4 p-0" style="font-weight: 600;">Cari Merchandise Kesukaan Anda</h5>
                <form action="" method="get">
                    @csrf
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-4">
                            <label for="search" class="small mb-2" style="font-weight: 600">Kata kunci pencarian</label>
                            <div class="input-group">
                                <span class="input-group-text rounded-4 bg-transparent"><i class="fa-solid fa-magnifying-glass text-lightgreen"></i></span>
                                <input type="text" class="form-control rounded-4 border-start-0" id="search" name="search" placeholder="Cari Merchandise" value="{{ request()->search }}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label for="search" class="small mb-2" style="font-weight: 600">Kategori</label>
                            <select class="form-select rounded-4" id="category" name="category">
                                <option value="">Semua Kategori</option>
                                @foreach ($category as $kategori)
                                <option value="{{ $kategori->slug }}" {{ request()->kategori == $kategori->slug ? 'selected' : '' }}>{{ $kategori->slug }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 mb-lg-0 mb-3">
                            <label for="search" class="small mb-2" style="font-weight: 600">Urutkan berdasarkan</label>
                            <select class="form-select rounded-4" id="sort" name="sort">
                                <option value="1" {{ request()->sort == 1 ? 'selected' : '' }}>Tanggal terbaru</option>
                                <option value="2" {{ request()->sort == 2 ? 'selected' : '' }}>Tanggal terlama</option>
                                <option value="3" {{ request()->sort == 3 ? 'selected' : '' }}>A - Z</option>
                                <option value="4" {{ request()->sort == 4 ? 'selected' : '' }}>Z - A</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn bg-green rounded-4 text-light w-100"><i class="fa-solid fa-magnifying-glass text-light"></i> Cari Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section id="list-product">
    <div class="bg-f7">
        <div class="container pb-5">
            <div class="row">
                @forelse ( $data as $p )
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="/showmerch/{{ $p->id }}" class="text-reset text-decoration-none">
                        <div class="card rounded-4 p-2">
                            <img src="{{$p->images[0]}}" alt="" class="img-fluid">
                            <div class="card-body">
                                <p>{{$p->nama_produk}}</p>
                            </div>
                            <div class="card-footer border-0 bg-transparent">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 style="font-weight: 600;">Rp. {{number_format($p->harga, 0,'', '.')}}</h5>
                                        <span class="badge text-danger me-1" style="background-color: rgba(255, 200, 200, 1)">15%</span>
                                        <span class="text-muted small text-decoration-line-through m-0 p-0">Rp. {{number_format($p->harga, 0,'', '.')}}</span>
                                    </div>
                                    <a href=""><img src="{{ asset('assets/home/img/merchandise/logo-cart.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        {{-- </a> --}}
                </div>
                @empty
                <tr>
                    <td colspan="4">
                        <h6 class="m-0 p-0 text-center">Data tidak ada</h6>
                    </td>
                </tr>
                @endforelse
            </div>
        </div>
</section>
@endsection
@section('js')
@endsection
