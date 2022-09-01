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
                        <h1>Tambah Testimoni</h1>
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
                                <h3 class="card-title">Masukan data Testimoni</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.training.testimonial.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('training_id') ? 'has-error' : '' }}">
                                            <label class="text-success" for="training_id">Pilih Pelatihan</label>
                                            <select class="form-control " id="training_id" name="training_id">
                                              @foreach ( $trainings as $training )
                                              <option value="{{ $training->id }}">{{ $training->title }}</option>
                                              @endforeach
                                            </select>
                                            @if ($errors->has('training_id'))
                                            <p class="alert alert-warning">
                                                {{ $errors->first('training_id') }}
                                            </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="name">Nama</label>
                                            <input type="text" name="name" class="form-control " id="name"
                                                value="{{ old('name') }}" placeholder="Nama">
                                            @if ($errors->has('name'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('name') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('instance') ? 'has-error' : '' }}">
                                            <label class="text-success" for="instance">Instansi</label>
                                            <input type="text" name="instance" class="form-control " id="instance"
                                                value="{{ old('instance') }}" placeholder="Instansi">
                                            @if ($errors->has('instance'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('instance') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Keterangan</label>
                                            {{-- <textarea type="text" name="description" class="form-control text-black  border border-warning" id="description " rows="5"
                                                value="{{ old('description') }}" placeholder="description"></textarea> --}}
                                            <input id="x" value="{{ old('description') }}" type="hidden" name="description">
                                            <trix-editor input="x" class="trix-content"></trix-editor>
                                            @if ($errors->has('description'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('description') }}
                                                </p>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="form-group mt-3">
                                            <label class="text-success">Pilih Gambar</label>
                                            <input class="btn btn-success" type="file" name="avatar">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.training.testimonial') }}" class="btn btn-warning">Back</a>
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
