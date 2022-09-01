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
                        <h1> Edit Event</h1>
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
                                <h3 class="card-title">Merubah Kategori Arsip</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8"
                                        action="{{ route('admin.event.update', $event->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="name">Nama Kegiatan</label>
                                            <input type="text" name="name"
                                                class="form-control" id="name"
                                                value="{{ $event->name ?? old('name') }}"
                                                placeholder="Nama Kegiatan">
                                            @if ($errors->has('name'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('name') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
                                            <label class="text-success" for="start_date">Mulai Kegiatan</label>
                                            <input type="date" name="start_date"
                                                class="form-control  date" id="start_date"
                                                value="{{ date('d-M-y', strtotime($event->start_date)) ?? old('start_date') }}"
                                                placeholder="Mulai Kegiatan">
                                            @if ($errors->has('start_date'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('start_date') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}">
                                            <label class="text-success" for="end_date">Selesai Kegiatan</label>
                                            <input type="date" name="end_date"
                                                class="form-control  date" id="end_date"
                                                value="{{ date('d-M-y', strtotime($event->end_date)) ?? old('end_date') }}"
                                                placeholder="Selesai Kegiatan">
                                            @if ($errors->has('end_date'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('end_date') }}
                                                </p>
                                            @endif
                                        </div>

                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.event') }}" class="btn btn-warning">Back</a>
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

