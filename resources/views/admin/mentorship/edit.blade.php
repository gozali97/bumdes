@extends('admin.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
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
                        <h1>Edit Data Pendampingan</h1>
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
                                <h3 class="card-title">Merubah Data Pendampingan</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8"
                                        action="{{ route('admin.mentorship.update', $mentorship->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row"">
                                            <div class="col">
                                                <div
                                                    class="form-group {{ $errors->has('title') ? 'has-error' : '' }} ">
                                                    <label class="text-success" for="title">Judul Pendampingan</label>
                                                    <input type="text" name="title" class="form-control"
                                                        id="title" value="{{ $mentorship->title }}">
                                                    @if ($errors->has('title'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('title') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('participant') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="participant">Jumlah Peserta</label>
                                                    <input type="text" name="participant" class="form-control" id="participant"
                                                        value="{{ $mentorship->participant }}">
                                                    @if ($errors->has('participant'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('participant') }}
                                                        </p>
                                                    @endif

                                                </div>
                                                <div
                                                    class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="description">Keterangan</label>
                                                    {{-- <textarea type="text" name="description" class="form-control " id="description" rows="5">
                                                    {!! $mentorship->description !!}</textarea> --}}
                                                    <input id="description" value="{{ $mentorship->description ?? old('description') }}" type="hidden" name="description">
                                                    <trix-editor input="description" class="trix-content "></trix-editor>
                                                    @if ($errors->has('description'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('description') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col">
                                                {{-- <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="document">Dokumen hasil Pendampingan</label>
                                                   <select name="document[]" id="document" class="form-control select2" multiple="multiple">
                                                        @foreach ($documents as $document )
                                                        <option  value="{{ $document->id }}" selected
                                                            @if ($mentorship->documents->contains($document))
                                                                
                                                            @endif> 
                                                            {{ $document->document_name  }} </option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('document'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('document') }}
                                                        </p>
                                                    @endif
                                                </div> --}}
                                                <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="document">Document</label>
                                                   <select name="document[]" id="document" class="form-control select2" multiple="multiple">
                                                        @foreach ($mentorship->documents as $document )
                                                        <option value="{{ $document->id }}" selected>{{ $document->document_name  }}</option>
                                                        @endforeach
                                                        @foreach ($documents as $document )
                                                        <option value="{{ $document->id }}">{{ $document->document_name  }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('document'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('document') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('method') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="method">Metode Pendamping</label>
                                                   <select name="method[]" id="method" class="form-control select2" multiple="multiple">
                                                        @foreach ($mentorship->mentorshipMethods as $method )
                                                        <option value="{{ $method->id }}" selected>{{ $method->method_name  }}</option>
                                                        @endforeach
                                                        @foreach ($mentorshipMethods as $method )
                                                        <option value="{{ $method->id }}">{{ $method->method_name }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('method'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('method') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('team') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="team">Tim Pedamping</label>
                                                   <select name="team[]" id="team" class="form-control select2" multiple="multiple">
                                                        @foreach ($mentorship->teams as $team )
                                                        <option value="{{ $team->id }}" selected>{{ $team->name  }}</option>
                                                        @endforeach
                                                        @foreach ($teams as $team )
                                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                        @endforeach
                                                   </select>
                                                    @if ($errors->has('team'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('team') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div
                                                    class="form-group {{ $errors->has('goal') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="goal">Tujuan pendampingan</label>
                                                    <input id=goal value="{{ $mentorship->goal ?? old('goal') }}" type="hidden" name="goal">
                                                    <trix-editor input=goal class="trix-content "></trix-editor>
                                                    @if ($errors->has('goal'))
                                                        <p class="alert alert-warning">
                                                            {{ $errors->first('goal') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div
                                                    class="form-group {{ $errors->has('video_link') ? 'has-error' : '' }}">
                                                    <label class="text-success" for="video_link">Link Video</label>
                                                    <input type="text" name="video_link" class="form-control"
                                                        id="video_link" value="{{ $mentorship->video_link }}">
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
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group mt-3">
                                            <label class="text-success">Pilih Gambar</label>
                                            <input class="btn btn-success" type="file" name="image"><br>
                                            <img src="{{ asset('images/mentorship/image/'.$mentorship->image) }}"
                                                class="img-fluid img-thumbnail" style="width: 200px; height:200px"></td>
                                        </div>
                                        <hr>
                                        <div class="form-group mt-3">
                                            <label class="text-success">Pilih Jadwal</label>
                                            <input class="btn btn-success" type="file" name="schedule"><br>
                                            <img src="{{ asset('images/mentorship/schedule/'.$mentorship->schedule) }}"
                                                class="img-fluid img-thumbnail" style="width: 200px; height:200px"></td>
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
