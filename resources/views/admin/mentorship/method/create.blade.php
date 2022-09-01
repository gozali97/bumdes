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
                        <h1>Metode Pendampingan Baru</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-card-primer">
                                <h3 class="card-title">Masukan Metode Pendampingan</h3>
                            </div>
                            {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.mentorship.method.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('method_name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="method_name">Metode Pendampingan</label>
                                            <input type="text" name="method_name" class="form-control" id="method_name"
                                                placeholder="Metode Pendampingan" >
                                                @if ($errors->has('method_name'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('method_name') }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Deskripsi</label>
                                            {{-- <textarea type="text" name="description" class="form-control text-black " id="description " rows="5"
                                                value="{{ old('description') }}" placeholder="Deskripsi"></textarea> --}}
                                            <input id="x" value="{{ old('description') }}" type="hidden" name="description">
                                            <trix-editor input="x" class="trix-content"></trix-editor>
                                            @if ($errors->has('description'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('description') }}
                                                </p>
                                            @endif
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.mentorship.method') }}" class="btn btn-warning">Back</a>
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

