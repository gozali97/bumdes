@extends('admin.layout')
@section('css')
    
@endsection
@section('content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
              </ol>
            </div>
          </div>
        </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-card-primer">
              <div class="inner">
                <h3>{{ $count_user }}</h3>
                <p>Akun Terdaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('/akun-terdaftar') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection
@section('js')
    
@endsection