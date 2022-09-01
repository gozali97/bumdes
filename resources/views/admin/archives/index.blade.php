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
                        <h1>List Archive</h1>
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
                                <h3 class="card-title">Tambah Arsip</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.archives.create') }}" class="btn btn-print"><i
                                            class="fas fa-plus"></i> Tambah</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori Arsip</th>
                                            <th>Nama</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($archives as $archive)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $archive->archiveCategory->name }}</td>
                                                <td>{{ $archive->name }}</td>
                                                <td>{{ $archive->path }}</td>
                                                <td>
                                                    <div class="row">

                                                        <div class="d-grid gap-2 d-md-block">

                                                            <a href="{{ route('admin.archives.edit', $archive->id) }}"
                                                                class="btn btn-warning"><i class=" fas fa-edit"></i></a>
                                                            <button id="delete"
                                                                data-title="{{ $archive->name }}"
                                                                href="{{ route('admin.archives.destroy', $archive->id) }}"
                                                                class=" btn btn-icon btn-outline-danger"><i
                                                                    class="fas fa-trash"></i></span></button>

                                                            <form action="" method="POST" id="deleteForm">
                                                                @csrf
                                                                @method('post')
                                                                <input type="submit" value="" style="display: none">
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
@section('js')
    @include('admin.layouts.script');
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

    <script>
        $('button#delete').on('click', function() {
            var href = $(this).attr('href');
            var title = $(this).data('title');

            Swal.fire({
                title: "Apa kamu yakin akan menghapus " + title + " ?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus itu!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').action = href;
                    document.getElementById('deleteForm').submit();
                    Swal.fire(
                        'Dihapus!',
                        'Data Anda telah dihapus.',
                        'Berhasil'
                    )
                }
            })

        });
    </script>
@endsection
