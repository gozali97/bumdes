@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Merchandise</h1>
                </div>
                {{-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/akun-terdaftar') }}">Akun Terdaftar</a></li>
                </ol>
            </div> --}}
        </div>
</div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-card-primer">
                        <h3 class="card-title">Masukan Data Merchandise</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 mt-5">
                            <form accept-charset="UTF-8" action="{{ route('admin.merch.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : '' }}">
                                            <label class="text-success" for="nama_produk">Nama Produk</label>
                                            <input type="text" name="nama_produk" class="form-control border" id="nama_produk" value="{{ old('nama_produk') }}" placeholder="Nama Produk">
                                            @if ($errors->has('harga'))
                                            <p class="alert alert-warning ">
                                                {{ $errors->first('nama_produk') }}
                                            </p>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                            <label class="text-success" for="slug">Slug</label>
                                            <select class="form-control" name="slug">
                                                <option selected>-- Pilih Kategori --</option>
                                                @foreach ( $slug as $category)
                                                <option value="{{$category->slug}}">{{$category->slug}}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" name="slug" class="form-control border" id="slug" value="{{ old('slug') }}" placeholder="Slug"> --}}
                                            @if ($errors->has('slug'))
                                            <p class="alert alert-warning ">
                                                {{ $errors->first('slug') }}
                                            </p>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('stok') ? 'has-error' : '' }}">
                                            <label class="text-success" for="slug">Stok</label>
                                            <input type="number" name="stok" class="form-control border" id="stok" value="{{ old('stok') }}" placeholder="Stok">
                                            @if ($errors->has('stok'))
                                            <p class="alert alert-warning">
                                                {{ $errors->first('stok') }}
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
                                            <label class="text-success" for="harga">Harga</label>
                                            <input type="text" name="harga" class="form-control border" id="harga" value="{{ old('harga') }}" placeholder="Harga">
                                            @if ($errors->has('harga'))
                                            <p class="alert alert-warning ">
                                                {{ $errors->first('harga') }}
                                            </p>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                                            <label class="text-success" for="details">Details</label>
                                            <textarea class="form-control border" name="details" id="details" rows="5" value="{{ old('harga') }}" placeholder="Details"></textarea>
                                            @if ($errors->has('details'))
                                            <p class="alert alert-warning ">
                                                {{ $errors->first('details') }}
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group mt-3">
                                    <label class="text-success">Pilih Gambar</label>
                                    <input class="btn btn-success" type="file" name="images[]" multiple accept="image/*">
                                    @if ($errors->has('images'))
                                    <p class="alert alert-warning ">
                                        {{ $errors->first('images') }}
                                    </p>
                                    @endif
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="{{ route('admin.merch') }}" class="btn btn-warning">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

@include('admin.layouts.script')
