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
                                <h3 class="card-title">Masukan Program Pendampingan</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.mentorship.store') }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row"">
                                            <div class="col">
                                                <div
                                                    class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="title">Judul
                                                        Pendampingan</label>
                                                    <input type="text" name="title" class="form-control"
                                                        id="title" value="{{ old('title') }}" placeholder="Judul Pendampingan">
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
                                                    <input id="description" value="" type="hidden" name="description">
                                                    <trix-editor input="description" >{!! old('description') !!}</trix-editor>
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

                                                <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="document">Dokumen Hasil Pendampingan</label>
                                                   <select name="document[]" id="document" class="form-control select2" multiple="multiple">
                                                        @foreach ($documents as $document )
                                                        <option value="{{ $document->id }}">{{ $document->document_name ?? old('document_name') }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('document'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('document') }}
                                                        </p>
                                                    @endif
                                                </div>

                                                <div class="form-group {{ $errors->has('method') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="method">Methode Pendampingan</label>
                                                   <select name="method[]" id="method" class="form-control select2" multiple="multiple">
                                                        @foreach ($mentorshipMethods as $method )
                                                        <option value="{{ $method->id }}">{{ $method->method_name ?? old('method_name') }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('method'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('method') }}
                                                        </p>
                                                    @endif
                                                </div>

                                                <div class="form-group {{ $errors->has('team') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="team">Tim Pendampingan</label>
                                                   <select name="team[]" id="team" class="form-control select2" multiple="multiple">
                                                        @foreach ($teams as $team )
                                                        <option value="{{ $team->id }}">{{ $team->name ?? old('name') }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('team'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('team') }}
                                                        </p>
                                                    @endif
                                                </div>

                                                <div class="form-group {{ $errors->has('goal') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="goal">Tujuan
                                                        Pendampingan</label>
                                                    <input id="goal" value="" type="hidden" name="goal">
                                                    <trix-editor input="goal" >{!! old('goal') !!}</trix-editor>
                                                    @if ($errors->has('goal'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('goal') }}
                                                        </p>
                                                    @endif
                                                </div>
                                          
                                                <div class="form-group {{ $errors->has('video_link') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="video_link">Link Video</label>
                                                    <input type="text" name="video_link" class="form-control"
                                                        id="video_link" value="{{ old('video_link') }}" placeholder="Link Video">
                                                    @if ($errors->has('video_link'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('video_link') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('featured') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="featured">Program Pendampingan Unggulan</label>
                                                   <select name="featured" id="featured" class="form-control">
                                                       
                                                        <option value="1">Unggulan</option>
                                                        <option value="0" selected>Tidak Unggulan</option>

                                                   </select>
                                                    @if ($errors->has('featured'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('featured') }}
                                                        </p>
                                                    @endif
                                                </div>

                                                <hr>
                                                <div class="form-group mt-3">
                                                    <label class="text-success">Pilih Gambar</label>
                                                    <input class="btn btn-success" type="file" name="image">
                                                    @if ($errors->has('image'))
                                                    <p class="alert alert-warning">
                                                        {{ $errors->first('image') }}
                                                    </p>
                                                    @endif
                                                </div>
                                                <hr>

                                                
                                                <div class="form-group mt-3">
                                                    <label class="text-success">Pilih Jadwal</label>
                                                    <input class="btn btn-success" type="file" name="schedule">
                                                    @if ($errors->has('schedule'))
                                                    <p class="alert alert-warning">
                                                        {{ $errors->first('schedule') }}
                                                    </p>
                                                     @endif
                                                </div>
                                                
                                                
                                            </div>
                                        </div>

                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.mentorship') }}" class="btn btn-warning">Back</a>
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
            $(window).resize(function() {
            $('.select2').css('width', "100% !important");
            });

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
