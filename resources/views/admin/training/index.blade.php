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
                        <h1>List Pelatihan</h1>
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
                                <h3 class="card-title">Tambah Pelatihan</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.training.create') }}" class="btn btn-print"><i
                                            class="fas fa-plus"></i> Tambah</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Pelatihan</th>
                                            <th>Peserta</th>
                                            <th>Keterangan</th>
                                            <th>Biaya Pelatihan</th>
                                            <th>Fasilitas</th>
                                            <th>Materi</th>
                                            <th>Pemateri</th>
                                            <th>Tujuan Pelatihan</th>
                                            <th>link Video</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($trainings as $training)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $training->title }}</td>
                                                <td>{{ $training->participant }}</td>
                                                {{-- <td>{{ Str::limit($training->keterangan, 20) }}</td> --}}
                                                <td>{!! Str::words($training->description, 15) !!}</td>
                                                <td>{{ $training->price }}</td>

                                                <td>
                                                    @foreach ($training->facilities as $fasility)
                                                        <span class="badge badge-warning text-black">{{ $fasility->facility_name  }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($training->materials as $material)
                                                        <span class="badge badge-warning text-black">{{ $material->title  }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($training->trainers as $trainer)
                                                        <span class="badge badge-warning text-black">{{ $trainer->trainer_name  }}</span>
                                                    @endforeach
                                                </td>
                                                {{-- <td>{{ $training->fasilitas }}</td> --}}
                                                <td>{!! Str::limit($training->purposes) !!}</td>
                                                <td>
                                                    <iframe src="{{ $training->video_link }}"
                                                        class="img-fluid img-thumbnail" style="width: 100px; height:100px">
                                                    </iframe>
                                                </td>
                                                <td>
                                                    <div class="row">

                                                        <div class="d-grid gap-2 d-md-block">
                                                            {{-- <form action="{{ route('admin.training.destroy', $training->id  ) }}" method="POST"> --}}
                                                            <a href="{{ route('admin.training.show', $training->slug) }}"
                                                                target="_blink" class="btn btn-success"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="{{ route('admin.training.edit', $training->id) }}"
                                                                class="btn btn-warning"><i class=" fas fa-edit"></i></a>
                                                            {{-- <a href="" class="btn btn-danger" ></a> --}}
                                                            {{-- @csrf
                                      @method('POST') --}}
                                                            {{-- <button type="submit" class=" btn btn-icon btn-outline-danger"><i class="fas fa-trash"></i></span></button> --}}

                                                            {{-- </form> --}}


                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
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
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "paging": true,
                pagingType: 'simple_numbers',
                lengthMenu: [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, 'All'],
                ],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
