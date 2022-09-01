@extends('admin.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@push('select2style')
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2/css/select2.min.css') }}">
@endpush
@section('content')
    @include('admin.layouts.nav')
    @include('admin.layouts.sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pelatihan Baru</h1>
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
                                <h3 class="card-title">Masukan data Pelatihan</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.training.store') }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row"">
                                            <div class="col">
                                                <div
                                                    class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="title">Judul
                                                        Pelatihan</label>
                                                    <input type="text" name="title" class="form-control"
                                                        id="title" value="{{ old('title') }}" placeholder="Judul Pelatihan">
                                                    @if ($errors->has('title'))
                                                        <p class="alert alert-warning ">
                                                            {{ $errors->first('title') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('participant') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="participant">Jumlah Peserta</label>
                                                    <input type="text" name="participant" class="form-control" id="participant"
                                                        value="{{ old('participant') }}" placeholder="Jumlah participant">
                                                    @if ($errors->has('participant'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('participant') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="description">Keterangan</label>
                                                    <input id="description" value="{{ old('description') }}" type="hidden" name="description">
                                                    <trix-editor input="description" class="trix-content"></trix-editor>
                                                    {{-- <textarea type="text" name="description" class="form-control " id="description " rows="5"
                                                        value="{{ old('description') }}" placeholder="description"></textarea> --}}
                                                    @if ($errors->has('description'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('description') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row"">
                                            <div class="col">
                                                <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="price">Biaya Pelatihan</label>
                                                    <input type="text" name="price" class="form-control"
                                                        id="price" value="{{ old('price') }}" placeholder="Biaya Pelatihan">
                                                    @if ($errors->has('price'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('price') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('facility') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="facility">Fasilitas</label>
                                                   <select name="facility[]" id="facility" class="form-control select2" multiple="multiple">
                                                        @foreach ($facilities as $fasility )
                                                        <option value="{{ $fasility->id }}">{{ $fasility->facility_name  }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('facility'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('facility') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('material') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="material">Materi</label>
                                                   <select name="material[]" id="material" class="form-control select2" multiple="multiple">
                                                        @foreach ($materials as $material )
                                                        <option value="{{ $material->id }}">{{ $material->title  }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('material'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('material') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('trainer') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="trainer">Pemateri</label>
                                                   <select name="trainer[]" id="trainer" class="form-control select2" multiple="multiple">
                                                        @foreach ($trainers as $trainer )
                                                        <option value="{{ $trainer->id }}">{{ $trainer->trainer_name  }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('trainer'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('trainer') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('purposes') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="purposes">Tujuan
                                                        Pelatihan</label>
                                                    {{-- <textarea type="text" name="purposes" class="form-control " id="purposes " rows="5"
                                                        value="{{ old('purposes') }}" placeholder="Tujuan Pelatihan"></textarea> --}}
                                                    <input id="purposes" value="{{ old('purposes') }}" type="hidden" name="purposes">
                                                    <trix-editor input="purposes" class="trix-content"></trix-editor>
                                                    @if ($errors->has('purposes'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('purposes') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('video_link') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="title">Link Video</label>
                                                    <input type="text" name="video_link" class="form-control"
                                                        id="video_link" value="{{ old('video_link') }}" placeholder="Link Video">
                                                    @if ($errors->has('video_link'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('video_link') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.training') }}" class="btn btn-warning">Back</a>
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
    <script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <Script>
        $(function(){
            $('.select2').select2();
        });
    </Script>
     <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 150, 
            });
            
        });
    </script>
@endsection
