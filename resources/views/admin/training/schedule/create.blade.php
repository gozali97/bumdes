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
                        <h1>Tambah Jadwal </h1>
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
                                <h3 class="card-title">Masukan data Jadwal Kegiatan</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.training.schedule.store') }}" method="POST">
                                        @csrf

                                        <div class="form-group {{ $errors->has('training_id') ? 'has-error' : '' }}">
                                            <label class="text-success" for="training_id">Nama Acara</label>
                                           <select name="training_id" id="training_id" class="form-control ">
                                                @foreach ($trainings as $training )
                                                <option value="{{ $training->id }}">{{ $training->title  }}</option>
                                                @endforeach
                                           </select>
                                            @if ($errors->has('training_id'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('training_id') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('event_date') ? 'has-error' : '' }}">
                                            <label class="text-success" for="event_date">Tanggal Pelaksanaan</label>
                                            <input type="date" name="event_date" class="form-control " id="event_date"
                                                value="{{ old('event_date') }}" placeholder="Tanggal Pelaksanaan">
                                            @if ($errors->has('event_date'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('event_date') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('event_duration') ? 'has-error' : '' }}">
                                            <label class="text-success" for="event_duration">Lama Kegiatan</label>
                                            <input type="text" name="event_duration" class="form-control " id="event_duration"
                                                value="{{ old('event_duration') }}" placeholder="Lama Kegiatan">
                                            @if ($errors->has('event_duration'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('event_duration') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('event_time') ? 'has-error' : '' }}">
                                            <label class="text-success" for="event_time">Waktu Pelaksanaan</label>
                                            <input type="text" name="event_time" class="form-control " id="event_time"
                                                value="{{ old('event_time') }}" placeholder="Waktu Pelaksanaan">
                                            @if ($errors->has('event_time'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('event_time') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                            <label class="text-success" for="location">Lokasi</label>
                                            {{-- <textarea type="text" name="location" class="form-control " id="location " rows="5"
                                                value="{{ old('location') }}" placeholder="location"></textarea> --}}
                                            <input id="x" value="{{ old('location') }}" type="hidden" name="location">
                                            <trix-editor input="x" class="trix-content"></trix-editor>
                                            @if ($errors->has('location'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('location') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('last_registration') ? 'has-error' : '' }}">
                                            <label class="text-success" for="last_registration">Akhir Pendaftaran</label>
                                            <input type="date" name="last_registration" class="form-control " id="last_registration"
                                                value="{{ old('last_registration') }}" placeholder="Akhir Pendaftaran">
                                            @if ($errors->has('last_registration'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('last_registration') }}
                                                </p>
                                            @endif
                                        </div>
                                        
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.training.schedule') }}" class="btn btn-warning">Back</a>
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
