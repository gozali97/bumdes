@extends('layouts.layout')
@section('content')
   <section id="download">
      <div class="bg-light">
         <div class="container py-5">
            <div class="row align-items-center">
               <div class="col-md-6 order-md-0 mb-md-0 order-1 mb-4">
                  <div class="row justify-content-center justify-content-md-start">
                     <div class="col-md-2 text-md-end mb-md-0 mb-2 text-center">
                        <i class="fa-solid fa-download text-lightgreen fa-3x"></i>
                     </div>
                     <div class="col-md-10 text-md-start text-center">
                        <h1 class="text-lightgreen m-0 p-0" style="font-weight: 600">Unduh Berkas</h1>
                        <p class="my-2 p-0">Unduh berkas seputar informasi & <br> Peraturan BUM Desa terbaru</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 order-0 order-md-1 text-md-end text-center d-none d-md-block">
                  <img src="{{ asset('assets/home/img/banner-download.svg') }}" alt="">
               </div>
            </div>

            <!-- card form cari -->
            <div class="card card-body rounded-5 p-4 shadow-sm">
               <h5 class="mt-0 mb-4 p-0" style="font-weight: 600">Cari Dokumen Kebutuhan Anda</h5>
               <form action="" method="get">
                  @csrf
                  <div class="row align-items-end justify-content-between">
                     <div class="col-lg-4">
                        <label for="search" class="small mb-2" style="font-weight: 600">Kata kunci pencarian</label>
                        <div class="input-group">
                           <span class="input-group-text rounded-4 bg-transparent"><i class="fa-solid fa-magnifying-glass text-lightgreen"></i></span>
                           <input type="text" class="form-control rounded-4 border-start-0" id="search" name="search" placeholder="Cari dokumen..."
                              value="{{ request()->search }}">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <label for="search" class="small mb-2" style="font-weight: 600">Kategori</label>
                        <select class="form-select rounded-4" id="category" name="category">
                           <option value="">Semua Kategori</option>
                           @foreach ($categories as $category)
                           <option value="{{ $category->slug }}" {{ request()->category == $category->slug ? 'selected' : '' }}>{{ $category->name }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="col-lg-3 mb-lg-0 mb-3">
                        <label for="search" class="small mb-2" style="font-weight: 600">Urutkan berdasarkan</label>
                        <select class="form-select rounded-4" id="sort" name="sort">
                           <option value="1" {{ request()->sort == 1 ? 'selected' : '' }}>Tanggal terbaru</option>
                           <option value="2" {{ request()->sort == 2 ? 'selected' : '' }}>Tanggal terlama</option>
                           <option value="3" {{ request()->sort == 3 ? 'selected' : '' }}>A - Z</option>
                           <option value="4" {{ request()->sort == 4 ? 'selected' : '' }}>Z - A</option>
                        </select>
                     </div>
                     <div class="col-lg-2">
                        <button type="submit" class="btn bg-green rounded-4 text-light w-100"><i class="fa-solid fa-magnifying-glass text-light"></i> Cari Sekarang</button>
                     </div>
                  </div>
               </form>
            </div>

            <!-- card tabel -->
            <div class="card card-body rounded-5 my-4 p-4 shadow-sm">
               <div class="table-responsive">
                  <table class="table-borderless table-sm m-0 table p-0" id="table-download">
                     <thead class="table-light">
                        <tr>
                           {{-- <th scope="col">#</th> --}}
                           <th scope="col">Nama Dokumen</th>
                           <th scope="col">Kategori</th>
                           <th scope="col">Tanggal</th>
                           <th scope="col">Unduh</th>
                        </tr>
                     </thead>
                     <tbody class="small">
                        @forelse ($documents as $document)
                           <tr>
                              {{-- <th>{{ $documents->firstItem() + $loop->index }}</th> --}}
                              <td>{{ $document->name }}</td>
                              <td>{{ $document->categoryDocument->name }}</td>
                              <td>{{ $document->created_at }}</td>
                              <td><a href="{{ url('download/' . $document->id) }}" class="btn btn-sm bg-green text-light rounded-4 w-100">Unduh</a></td>
                           </tr>
                        @empty
                           <tr>
                              <td colspan="4">
                                 <h6 class="m-0 p-0 text-center">Data tidak ada</h6>
                              </td>
                           </tr>
                        @endforelse
                     </tbody>
                  </table>
                  <!-- pagination link -->
                  <div class="d-flex justify-content-center align-items-center m-4">
                     {{ $documents->links() }}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
@section('js')
@endsection
