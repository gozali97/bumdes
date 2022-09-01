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
                                    <form accept-charset="UTF-8" action="{{ route('admin.mentorship.alumnae.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('mentorship_id') ? 'has-error' : '' }}">
                                            <label class="text-success" for="mentorship_id">Pilih Pendampingan</label>
                                            <select class="form-control " id="mentorship_id" name="mentorship_id">
                                              @foreach ( $mentorships as $mentorship )
                                              <option value="{{ $mentorship->id }}">{{ $mentorship->title }}</option>
                                              @endforeach
                                            </select>
                                            @if ($errors->has('mentorship_id'))
                                            <p class="alert alert-warning">
                                                {{ $errors->first('mentorship_id') }}
                                            </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('alumnae_name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="alumnae_name">Nama</label>
                                            <input type="text" name="alumnae_name" class="form-control " id="alumnae_name"
                                                value="{{ old('alumnae_name') }}" placeholder="Nama">
                                            @if ($errors->has('alumnae_name'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('alumnae_name') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('institution') ? 'has-error' : '' }}">
                                            <label class="text-success" for="institution">Instansi</label>
                                            <input type="text" name="institution" class="form-control " id="institution"
                                                value="{{ old('institution') }}" placeholder="Instansi">
                                            @if ($errors->has('institution'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('institution') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Keterangan</label>
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
                                            <input class="btn btn-success" type="file" name="image">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.mentorship.alumnae') }}" class="btn btn-warning">Back</a>
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
