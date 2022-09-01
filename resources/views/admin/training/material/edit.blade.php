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
                        <h1>Edit Materi</h1>
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
                                <h3 class="card-title">Merubah data materi</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8"
                                        action="{{ route('admin.training.material.update', $material->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                       
                                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                            <label class="text-success" for="title">Judul Materi</label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $material->title ?? old('title') }}" id="title"
                                                placeholder="Keterangan">
                                            @if ($errors->has('title'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('title') }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Deskripsi</label>
                                            {{-- <textarea type="text" name="description" class="form-control text-black " id="description " rows="5"
                                                placeholder="Deskripsi">{{ $material->description ?? old('description') }}</textarea> --}}
                                            <input id="x" value="{{ $material->description ?? old('description') }}" type="hidden" name="description">
                                            <trix-editor input="x" class="trix-content "></trix-editor>
                                            @if ($errors->has('description'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('description') }}
                                                </p>
                                            @endif
                                        </div>

                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.training.material') }}" class="btn btn-warning">Back</a>
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
