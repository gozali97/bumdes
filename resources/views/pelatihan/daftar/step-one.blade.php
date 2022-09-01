@extends('layouts.layout')
@section('content')
   <div class="container py-5">
      <div class="row">
         <a href="{{ url('pelatihan-bumdes') }}" class="text-lightgreen text-decoration-none" style="font-weight: 600"><i class="fa-solid fa-angle-left"></i> Kembali ke Pelatihan</a>
         <div class="col-md-9">
            <div class="card card-body mt-4 p-4 shadow-sm" style="border-radius: 20px;">
               <div class="d-flex align-items-center mb-5">
                  <span class="me-2" style="width: 60px; height: 15px; background-color: #0EA44D; border-radius: 20px"></span>
                  <span style="width: 40px; height: 15px; background-color: #DDDDDD; border-radius: 20px"></span>
               </div>
               <h4 style="font-weight: 600">Daftar Pelatihan</h4>
               <p class="text-secondary m-0 p-0">Beri tahu kami tentang anda sehingga kami dapat menghubungi anda lebih lanjut</p>

               <form action="{{ url('register-training') }}" method="post" class="form-register-training">
                  @csrf

                  <div class="small my-3">
                     <label for="name" class="form-label mb-1">Nama Lengkap</label>
                     <input type="text" class="form-control rounded-3 @error('name') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', session('nama')) }}"
                        placeholder="Masukan nama lengkap anda" required>
                     <small class="text-secondary">Nama harus sesuai KTP</small>
                     @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>

                  <div class="small my-3">
                     <label for="email" class="form-label mb-1">Email</label>
                     <input type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" id="email" name="email"
                        value="{{ old('email', session('email')) }}" placeholder="Masukan email anda" required>
                     <small class="text-secondary">contoh: email@bumdes.com</small>
                     @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>

                  <div class="small my-3">
                     <label for="whatsapp" class="form-label mb-1">Nomor WhatsApp</label>
                     <input type="number" class="form-control rounded-3 @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp"
                        value="{{ old('whatsapp', session('whatsapp')) }}" placeholder="Masukan Nomor Whatsapp aktif" required>
                     <small class="text-secondary">contoh:08xxxxxxx12</small>
                     @error('whatsapp')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>

                  <div class="small mb-3 mt-4">
                     <label for="instansi" class="form-label mb-1">Nama Intansi/BUM Desa</label>
                     <input type="text" class="form-control rounded-3 @error('instansi') is-invalid @enderror" id="instansi" name="instansi"
                        value="{{ old('instansi', session('instansi')) }}" placeholder="Masukan nama Instansi / BUM Desa" required>
                     @error('instansi')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>

                  <div class="small my-3">
                     <label for="jabatan" class="form-label mb-1">Jabatan</label>
                     <input type="text" class="form-control rounded-3 @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan"
                        value="{{ old('jabatan', session('jabatan')) }}" placeholder="Masukan jabatan anda" required>
                     @error('jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>

                  <div class="small my-3">
                     <label for="provinsi" class="form-label mb-1">Provinsi</label>
                     <select class="form-select rounded-3 @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" required>
                        <option value="">Provinsi anda</option>
                        @foreach ($provinces as $province)
                           <option data-id="{{ $province->id }}" value="{{ $province->name }}" {{ old('provinsi') == $province->name || session('provinsi') == $province->name ? 'selected' : '' }}>
                              {{ $province->name }}</option>
                        @endforeach
                     </select>
                     @error('provinsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>

                  <div class="small my-3">
                     <label for="kota" class="form-label mb-1">Kota</label>
                     <select class="form-select rounded-3 @error('kota') is-invalid @enderror" id="kota" name="kota" required>
                        <option value="">Kota anda</option>
                        @if ($cities)
                           @foreach ($cities as $city)
                              <option value="{{ $city->name }}" {{ old('kota') == $city->name || session('kota') == $city->name ? 'selected' : '' }}>
                                 {{ $city->name }}</option>
                           @endforeach
                        @endif
                     </select>
                     @error('kota')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>

                  <div class="d-flex justify-content-end align-items-center mt-4">
                     <button type="submit" class="btn bg-green rounded-pill text-light px-5">Selanjutnya</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-3">
            <div class="card card-body mt-4 p-4 shadow-sm" style="border-radius: 20px;">
               <p class="text-secondary m-0 p-0">Ringkasan Pelatihan</p>
               <h6 class="mt-2" style="font-weight: 600">Pelatihan Penyusunan Laporan Keuangan BUM Desa</h6>
               <hr class="dash my-3">

               <p class="mb-3"><i class="fa-solid fa-calendar-days text-lightgreen me-2"></i> <span id="date" class="small">-</span></p>
               <p class="mb-3"><i class="fa-solid fa-clock text-lightgreen me-2"></i> <span id="time" class="small">-</span></p>
               <p class="mb-3"><i class="fa-solid fa-location-dot text-lightgreen me-2"></i> <span id="location" class="small">-</span></p>
            </div>

            <div class="d-grid mt-2 gap-2">
               <a href="https://wa.me/6287738900800" target="_blank" class="btn text-decoration-none btn-lightgreen rounded-pill px-5" style="font-weight: 600"><i class="fa-brands fa-whatsapp fa-lg me-1"></i>
                  Hubungi Kami</a>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('js')
   <script>
      // get regency by province
      const selectProvince = document.querySelector('#provinsi')
      const selectCity = document.querySelector('#kota')
      selectProvince.addEventListener('change', function() {
         const province_id = this.options[this.selectedIndex].dataset.id

         if (!province_id) {
            selectCity.disabled = true
            return selectCity.innerHTML = '<option value="">Kota anda</option>'
         }

         fetch(`/city/${province_id}`, {
               method: 'GET'
            })
            .then(res => res.json())
            .then(data => {
               selectCity.disabled = false
               selectCity.innerHTML = '<option value="">Kota anda</option>'
               data.forEach(city => {
                  selectCity.innerHTML += `<option value="${city.name}">${city.name}</option>`
               })
            })
      })

      // clear select regency / city if select province not selected
      if (!selectProvince.value) {
         selectCity.disabled = true
         selectCity.innerHTML = '<option value="">Kota anda</option>'
      }
   </script>
@endsection
