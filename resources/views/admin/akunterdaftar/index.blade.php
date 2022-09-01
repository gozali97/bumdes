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
              <h1>Akun Terdaftar</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/akun-terdaftar') }}">Akun Terdaftar</a></li>
              </ol>
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
                        <h3 class="card-title">Data Akun Terdaftar</h3>
                        <div class="card-tools">
                          <a href="{{ url('/akun-terdaftar/export') }}" class="btn btn-print"><i class="fas fa-print"></i> Print Excel</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Lengkap</th>
                              <th>Nama Intansi/BUM Desa</th>
                              <th>Jabatan</th>
                              <th>E-Mail</th>
                              <th>No Hp / Telp</th>
                              <th>Daftar Sebagai</th>
                              <!--<th>Provinsi</th>-->
                              <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                            <tr>
                              <td>{{$loop->index +1 }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->nama_instansi}}</td>
                              <td>{{ $user->jabatan }}</td>
                              <td>{{ $user->email }}</td>
                              <td>0{{ $user->no_telp }}</td>
                              @if ($user->hak_akses == 1)
                              <td>Pegawai Bumdes</td>
                              @elseif($user->hak_akses == 2)
                              <td>Pegawai Desa</td>
                              @elseif($user->hak_akses == 3)
                              <td>Umum</td>
                              @endif
                              <!--<td>{{ $user->province_id }}</td>-->
                              <td>
                                <div class="row">
                                  <div class="col-3">
                                    <button class="btn btn-kolom-lihat" id="lihat_akun" data-toggle="modal" data-target='#lihat_modal' data-id="{{ $user->id }}"><i class="fas fa-eye"></i></button>
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
<div class="modal fade" id="lihat_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail User</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">Nama Lengkap</label>
              <input type="text" value="" class="form-control input-form" id="name" name="email" disabled>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">Daftar Sebagai</label>
              <input type="text" value="" class="form-control input-form" id="sebagai" name="email" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">Nama Instansi</label>
              <input type="text" value="" class="form-control input-form" id="instansi" name="email" disabled>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">Jabatan</label>
              <input type="text" value="" class="form-control input-form" id="jabatan" name="email" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">Tanggal Lahir</label>
              <input type="text" value="" class="form-control input-form" id="tgl_lahir" name="email" disabled>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">Jenis Kelamin</label>
              <input type="text" value="" class="form-control input-form" id="jekel" name="email" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">Provinsi</label>
              <input type="text" value="" class="form-control input-form" id="provinsi" name="email" disabled>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">Kabupaten / Kota</label>
              <input type="text" value="" class="form-control input-form" id="kota" name="email" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">E-mail</label>
              <input type="text" value="" class="form-control input-form" id="email" name="email" disabled>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="label-form">No Telp / Hp</label>
              <input type="text" value="" class="form-control input-form" id="no_telp" name="email" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- <div class="modal fade" id="lihat_modal">
  <div class="modal-dialog">
     <form id="companydata">
          <div class="modal-content">
          <input type="hidden" id="color_id" name="color_id" value="">
          <div class="modal-body">
              <input type="text" name="name" id="name" value="" class="form-control">
          </div>
          <input type="submit" value="Submit" id="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;">
      </div>
     </form>
  </div>
</div> --}}
@endsection
@section('js')
<script src="{{ asset('/assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, 
        "lengthChange": false, 
        "autoWidth": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
<script>

  $(document).ready(function () {
  
  $.ajaxSetup({
      headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
  });
  
  $('body').on('click', '#lihat_akun', function (event) {
      event.preventDefault();
      var id = $(this).data('id');
      console.log(id)
      $.get('/akun-terdaftar/' + id + '/lihat', function (data) {
           $('#id').val(data.data.id);
           $('#name').val(data.data.name);
           $('#instansi').val(data.data.nama_instansi);
           $('#jabatan').val(data.data.jabatan);
           $('#provinsi').val(data.data.provinsi);
           $('#kota').val(data.data.kota);
           $('#tgl_lahir').val(data.data.tgl_lahir);
           $('#jekel').val(data.data.jekel);
           $('#email').val(data.data.email);
           $('#no_telp').val('0'+data.data.no_telp);
           if(data.data.hak_akses == 1){
            $('#sebagai').val('Pegawai Bumdes');
           } else if (data.data.hak_akses == 2){
            $('#sebagai').val('Pegawai Desa');
           } else if (data.data.hak_akses == 3){
            $('#sebagai').val('Umum');
           }
       })
  });
  
  }); 
</script>
@endsection