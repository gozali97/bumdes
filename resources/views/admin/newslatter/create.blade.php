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
                        <h1>Newslatter</h1>
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
                                <h3 class="card-title">Masukan Data Newslatter</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.newslatter.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="name">Nama Newslatter</label>
                                            <input type="text" name="name" class="form-control border" id="name"
                                                value="{{ old('name') }}" placeholder="Nama Newslatter">
                                            @if ($errors->has('name'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('name') }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('period') ? 'has-error' : '' }}">
                                            <label class="text-success" for="period">Periode</label>
                                            <input type="text" name="period" class="form-control border" id="period"
                                                value="{{ old('period') }}" placeholder="Periode">
                                            @if ($errors->has('period'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('period') }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Keterangan</label>
                                            <input id="description" value="{{ old('description') }}" type="hidden" name="description">
                                            <trix-editor input="description" class="trix-content"></trix-editor>
                                            @if ($errors->has('description'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('description') }}
                                                </p>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="form-group mt-3">
                                            <label class="text-success">Pilih File</label>
                                            <input class="btn btn-success" type="file" name="file">
                                            @if ($errors->has('file'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('file') }}
                                                </p>
                                            @endif
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.newslatter') }}" class="btn btn-warning">Back</a>
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
