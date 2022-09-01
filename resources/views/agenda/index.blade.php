@extends('layouts.layout')
@section('content')
   <div class="bg-fa">
      <div class="container py-5">
         <!-- banner -->
         <div class="row align-items-center">
            <div class="col-md-6 order-md-0 order-1">
               <h5 class="mb-3" style="font-weight: 600">Agenda Bumdes.id</h5>
               <p class="text-secondary small mb-3 mt-0 p-0">Dapatkan informasi terkait semua kegiatan yang dilakukan di Bumdes.id</p>
            </div>
            <div class="col-md-6 text-end order-0 order-md-1 mb-md-0 mb-3">
               <img src="{{ asset('assets/home/img/event/banner-event.png') }}" alt="gambar banner" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
   <div class="bg-f7">
      <div class="container py-5">
         <!-- calendar -->
         <div class="row mt-5">
            <div class="col-12">
               {!! $calendar->calendar() !!}
               {!! $calendar->script() !!}
            </div>
         </div>
      </div>
   </div>
@endsection
@section('js')
@endsection
