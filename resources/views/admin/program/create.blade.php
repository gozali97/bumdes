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
                        <h1>Fasilitas</h1>
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
                                <h3 class="card-title">Masukan data Fasilitas</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.program.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('program_id') ? 'has-error' : '' }}">
                                            <label class="text-success" for="program_id">Kategori Program</label>
                                            <select class="form-control" id="program_id" name="program_id">
                                              @foreach ( $categories as $category )
                                              <option value="{{ $category->id }}">{{ $category->program_name }}</option>
                                              @endforeach
                                            </select>
                                            @if ($errors->has('program_id'))
                                            <p class="alert alert-warning">
                                                {{ $errors->first('program_id') }}
                                            </p>
                                        @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('question') ? 'has-error' : '' }}">
                                            <label class="text-success" for="question">Pertanyaan</label>
                                            <input type="text" name="question" class="form-control " id="question"
                                                value="{{ old('question') }}" placeholder="Pertanyaan">
                                            @if ($errors->has('question'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('question') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('answer') ? 'has-error' : '' }}">
                                            <label class="text-success" for="answer">Jawaban</label>
                                            <input id="x" value="{{ old('answer') }}" type="hidden" name="answer">
                                            <trix-editor input="x" class="trix-content"></trix-editor>
                                            @if ($errors->has('answer'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('answer') }}
                                                </p>
                                            @endif
                                        </div>

                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.program') }}" class="btn btn-warning">Back</a>
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
