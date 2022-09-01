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
                        <h1>Tambah Kategori Program </h1>
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
                                <h3 class="card-title">Masukan Data Kategori Program</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.program.category.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('program_name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="program_name">Kategori Program</label>
                                            <input type="text" name="program_name" class="form-control " id="program_name"
                                                value="{{ old('program_name') }}" placeholder="Kategori Programn">
                                            @if ($errors->has('program_name'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('program_name') }}
                                                </p>
                                            @endif
                                        </div>

                                        {{-- <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Keterangan</label>
                                            <textarea type="text" name="description" class="form-control border border-warning" id="description " rows="5"
                                                        value="{{ old('description') }}" placeholder="Keterangan"></textarea>
                                            @if ($errors->has('description'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('description') }}
                                                </p>
                                            @endif
                                        </div> --}}

                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Keterangan</label>
                                            <input id="x" value="{{ old('description') }}" type="hidden" name="description">
                                            <trix-editor input="x" class="trix-content "></trix-editor>
                                            {{-- <textarea type="text" name="description" class="form-control border border-warning" id="description " rows="5"
                                                        value="{{ old('description') }}" placeholder="Keterangan"></textarea> --}}
                                            @if ($errors->has('description'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('description') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('button') ? 'has-error' : '' }}">
                                            <label class="text-success" for="button">Alamat Url</label>
                                            <input type="text" name="button" class="form-control " id="button"
                                                value="{{ old('button') }}" placeholder="Alamat Url">
                                            @if ($errors->has('button'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('button') }}
                                                </p>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="form-group mt-3">
                                            <label class="text-success">Pilih Gambar</label>
                                            <input class="btn btn-success" type="file" name="image">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.program.category') }}" class="btn btn-warning">Back</a>
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
@section('js')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 150, 
            });
            
        });
    </script>
@endsection
