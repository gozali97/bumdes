@extends('admin.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@endsection
@section('content')
    @include('admin.layouts.nav')
    @include('admin.layouts.sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Edit Schedule</h1>
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
                                <h3 class="card-title">Merubah Jadwal Kegiatan</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8"
                                        action="{{ route('admin.training.schedule.update', $schedule->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('training_id') ? 'has-error' : '' }}">
                                            <label class="text-success" for="training_id">Nama Acara</label>
                                            <select class="form-control" id="training_id" name="training_id">
                                                @foreach ($trainings as $training)
                                                    <option value="{{ $training->id }} ">{{ $training->title }}
                                                    </option>
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
                                            <input type="date" name="event_date"
                                                class="form-control  date" id="event_date"
                                                value="{{ date('d/M/y', strtotime($schedule->event_date)) ?? old('event_date') }}"
                                                placeholder="Tanggal Pelaksanaan">
                                            @if ($errors->has('event_date'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('event_date') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('event_duration') ? 'has-error' : '' }}">
                                            <label class="text-success" for="event_duration">Lama Kegiatan</label>
                                            <input type="text" name="event_duration"
                                                class="form-control " id="event_duration"
                                                value="{{ $schedule->event_duration ?? old('event_duration') }}"
                                                placeholder="Lama Kegiatan">
                                            @if ($errors->has('event_duration'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('event_duration') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('event_time') ? 'has-error' : '' }}">
                                            <label class="text-success" for="event_time">Waktu Pelaksanaan</label>
                                            <input type="text" name="event_time"
                                                class="form-control " id="event_time"
                                                value="{{ $schedule->event_time ?? old('event_time') }}"
                                                placeholder="Waktu Pelaksanaan">
                                            @if ($errors->has('event_time'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('event_time') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                            <label class="text-success" for="location">Lokasi</label>
                                            {{-- <textarea type="text" name="location" class="form-control " id="location " rows="5"
                                                value="{{ old('location') }}" placeholder="Lokasi">
                                                {{ $schedule->location ?? old('location') }}</textarea> --}}
                                            <input id="location" value="{{ $schedule->location ?? old('location') }}" type="hidden" name="location">
                                            <trix-editor input="location" class="trix-content "></trix-editor>
                                            @if ($errors->has('location'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('location') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('last_registration') ? 'has-error' : '' }}">
                                            <label class="text-success" for="last_registration">Akhir Pendaftaran</label>
                                            <input type="date" name="last_registration"
                                                class="form-control  date" id=" last_registration"
                                                value="{{ date('d/M/y', strtotime($schedule->last_registration)) ?? old('last_registration') }}"
                                                placeholder="Akhir Pendaftaran">
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
    
    <script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  
    </script> 
@endsection

