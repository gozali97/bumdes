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
                        <h1>Archive</h1>
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
                                <h3 class="card-title">Merubah Data arsip</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8"
                                        action="{{ route('admin.archives.update', $archive->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group {{ $errors->has('archive_category_id') ? 'has-error' : '' }}">
                                            <label class="text-success" for="archive_category_id">Kategori Arsip</label>
                                            <select class="form-control" id="archive_category_id" name="archive_category_id">

                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }} ">{{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('archive_category_id'))
                                                <p class="alert alert-warning">
                                                    {{ $errors->first('archive_category_id') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="name">Nama</label>
                                            <input type="text" name="name"
                                                class="form-control  date" id="name"
                                                value="{{ $archive->name ?? old('name') }}"
                                                placeholder="Nama">
                                            @if ($errors->has('name'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('name') }}
                                                </p>
                                            @endif
                                        </div>

                                        <hr>
                                        <div class="form-group mt-3">
                                          <label class="text-success">Pilih File</label>
                                          <input class="btn btn-success" type="file" name="path"><br><br>
                                          <embed  type="application/pdf" src="{{ asset('archive/' .$archive->path) }}" width="600" height="400">
                                          </embed>
                                            {{-- <img src="{{asset('images/banner/'.$banner->image)}}" class="img-fluid img-thumbnail" style="width: 200px; height:200px"></td> --}}
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.archives') }}" class="btn btn-warning">Back</a>
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
