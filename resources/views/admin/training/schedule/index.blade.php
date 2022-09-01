@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
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
              <h1>List Schedule</h1>
            </div>
          </div>
        </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-card-primer">
                        <h3 class="card-title">Tambah Jadwal Kegiatan</h3>
                        <div class="card-tools">
                          <a href="{{ route('admin.training.schedule.create') }}" class="btn btn-print"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Acara</th>
                              <th>Tanggal Pelaksanaan</th>
                              <th>Lama Kegiatan</th>
                              <th>Waktu Pelaksannan</th>
                              <th>Lokasi Kegiatan</th>
                              <th>Akhir Pendaftaran</th>
                              <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($schedules as $schedule)
                            <tr>
                              <td>{{$loop->index +1 }}</td>
                              <td>{{ $schedule->training->title }}</td>
                              <td>{!! date('d-M-y', strtotime($schedule->event_date)) !!}</td>
                              <td>{{ $schedule->event_duration}}</td>
                              <td>{{ $schedule->event_time }}</td>
                              <td>{!! Str::words($schedule->location, 15 )!!}</td>
                              <td>{!! date('d-M-y', strtotime($schedule->last_registration)) !!}</td>
                              <td>
                                <div class="row">
                                  
                                  <div class="d-grid gap-2 d-md-block">
                                    <form action="{{ route('admin.training.schedule.destroy', $schedule->id  ) }}" method="POST">
                                      <a href="{{ route('admin.training.schedule.edit', $schedule->id  ) }}" class="btn btn-warning" ><i class=" fas fa-edit"></i></a>
                                      {{-- <a href="" class="btn btn-danger" ></a> --}}
                                      @csrf
                                      @method('POST')
                                      <button type="submit" class=" btn btn-icon btn-outline-danger"><i class="fas fa-trash"></i></span></button>
                                     
                                  </form>
                                    
                                    
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