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
                        <h1>List Pendaftar Pelatihan</h1>
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
                                <h3 class="card-title">Data Pendaftar Pelatihan</h3>
                                <div class="card-tools">
                                   
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Telphone</th>
                                            <th>Instansi</th>
                                            <th>Jabatan</th>
                                            <th>Provinsi</th>
                                            <th>Kota</th>
                                            <th>Opsi</th>
                                            <th>Pelatihan</th>
                                            <th>Jadwal</th>
                                            <th>Tanggal</th>
                                            <!--<th>Aksi</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registerTrainings as $registerTraining)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $registerTraining->nama }}</td>
                                                <td>{{ $registerTraining->email }}</td>
                                                <td>{{ $registerTraining->whatsapp }}</td>
                                                <td>{{ $registerTraining->instansi }}</td>
                                                <td>{{ $registerTraining->jabatan }}</td>
                                                <td>{{ $registerTraining->provinsi }}</td>
                                                <td>{{ $registerTraining->kota }}</td>
                                                <td>{{ $registerTraining->opsi }}</td>
                                                <td>{{ $registerTraining->pelatihan }}</td>
                                                <td>{{ $registerTraining->jadwal }}</td>
                                                <td>{{ $registerTraining->tanggal }}</td>
                                                <!--<td>-->
                                                    <!--<div class="row">-->

                                                    <!--    <div class="d-grid gap-2 d-md-block">-->

                                                    <!--        <a href=""-->
                                                    <!--            target="_blink" class="btn btn-success"><i-->
                                                    <!--                class="fas fa-eye"></i></a>-->
                                                    <!--        <a href=""-->
                                                    <!--            class="btn btn-warning"><i class=" fas fa-edit"></i></a>-->
                                                         


                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                <!--</td>-->
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
