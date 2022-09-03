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
                    <h1>Kategori Merchandise</h1>
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
                        <h3 class="card-title">Masukan Data Kategori Merchandise</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 mt-5">
                            <form accept-charset="UTF-8" action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                            <label class="text-success" for="nama_produk">Nama Kategori</label>
                                            <input type="text" name="slug" class="form-control border" id="slug" value="{{ $category->slug ?? old('slug') }}" placeholder="Nama Kategori">
                                            @if ($errors->has('slug'))
                                            <p class="alert alert-warning ">
                                                {{ $errors->first('slug') }}
                                            </p>
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.category') }}" class="btn btn-warning">Back</a>
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
