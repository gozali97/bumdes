@extends('admin.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
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
                        <h1>Banner</h1>
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
                                <h3 class="card-title">Masukan data banner</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.banner.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                            <label class="text-success" for="title">Judul</label>
                                            <input type="text" name="title" class="form-control " id="tittle"
                                                value="{{ old('title') }}" placeholder="Judul">
                                            @if ($errors->has('title'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('title') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Keterangan</label>
                                            <input type="text" name="description" class="form-control " id="description"
                                                value="{{ old('description') }}" placeholder="Keterangan">
                                            @if ($errors->has('description'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('description') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label class="text-success" for="button">Label Tombol</label>
                                            <input type="text" name="button" class="form-control " id="button"
                                                placeholder="Label Tombol">
                                        </div>

                                        <div class="form-group">
                                            <label class="text-success" for="url" required="required">Link</label>
                                            <input type="text" name="url" class="form-control  id="url"
                                                placeholder="Link">
                                        </div>
                                        <hr>
                                        <div class="form-group mt-3">
                                            <label class="text-success">Pilih Gambar</label>
                                            <input class="btn btn-success" type="file" name="image">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.banner') }}" class="btn btn-warning">Back</a>
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
