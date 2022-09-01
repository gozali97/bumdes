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
                        <h1>Edit Trainer</h1>
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
                                <h3 class="card-title">Merubah data pemateri</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8"
                                        action="{{ route('admin.training.trainer.update', $trainer->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('trainer_name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="trainer_name">Pemateri</label>
                                            <input type="text" name="trainer_name"
                                                class="form-control" id="trainer_name"
                                                value="{{ $trainer->trainer_name ?? old('trainer_name') }}"
                                                placeholder="pemateri">
                                            @if ($errors->has('trainer_name'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('trainer_name') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('instance') ? 'has-error' : '' }}">
                                            <label class="text-success" for="instance">Instansi</label>
                                            <input type="text" name="instance" class="form-control"
                                                id="instance" value="{{ $trainer->instance ?? old('instance') }}"
                                                placeholder="Instansi">
                                            @if ($errors->has('instance'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('instance') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label class="text-success" for="description">Keterangan</label>
                                            {{-- <textarea type="text" name="description" class="form-control text-black " id="description " rows="5"
                                                value="" placeholder="description">{{ $trainer->description ?? old('description') }}</textarea> --}}
                                            <input id="x" value="{{ $trainer->description ?? old('description') }}" type="hidden" name="description">
                                            <trix-editor input="x" class="trix-content "></trix-editor>
                                            @if ($errors->has('description'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('description') }}
                                                </p>
                                            @endif
                                        </div>

                                        <hr>
                                        <div class="form-group mt-3">
                                            <label class="text-success">Pilih Gambar</label>
                                            <input class="btn btn-success" type="file" name="image"><br>
                                            <img src="{{ asset('images/trainer/' . $trainer->image) }}"
                                                class="img-fluid img-thumbnail" style="width: 200px; height:200px"></td>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.training.trainer') }}" class="btn btn-warning">Back</a>
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
