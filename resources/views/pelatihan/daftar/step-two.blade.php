@extends('layouts.layout')
@section('content')
   <div class="container py-5">
      <div class="row">
         <a href="{{ url('pelatihan-bumdes') }}" class="text-lightgreen text-decoration-none" style="font-weight: 600"><i class="fa-solid fa-angle-left"></i> Kembali ke Pelatihan</a>
         <div class="col-md-9">
            <div class="card card-body mt-4 p-4 shadow-sm" style="border-radius: 20px;">
               <div class="d-flex align-items-center mb-5">
                  <span class="me-2"style="width: 40px; height: 15px; background-color: #DDDDDD; border-radius: 20px"></span>
                  <span style="width: 60px; height: 15px; background-color: #0EA44D; border-radius: 20px"></span>
               </div>
               <h4 style="font-weight: 600">Pelatihan yang diinginkan</h4>
               <p class="text-secondary m-0 p-0">Segera pilih tema peltaihan dan tanggal pelatihan yang kamu inginkan</p>

               <form action="{{ url('register-training/submit') }}" method="post" class="form-register-training" id="form-submit-register-training">
                  @csrf

                  <div class="small my-3">
                     <label for="radio-training" class="form-label d-block mb-1">Ingin mendaftarkan diri secara?</label>

                     <div class="form-check form-check-inline">
                        <input class="form-check-input input-form-register" type="radio" name="opsi" id="radio-individu" value="Individu" checked required>
                        <p class="text-secondary m-0 p-0">Individu</p>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input input-form-register" type="radio" name="opsi" id="radio-kelompok" value="Kelompok" required>
                        <p class="text-secondary m-0 p-0">Kelompok</p>
                     </div>
                     <p class="small text-danger invalid-opsi"></p>
                  </div>

                  <div class="small my-3">
                     <label for="pelatihan-bumdes" class="form-label mb-1">Tema Pelatihan</label>
                     <select class="form-select rounded-3 input-form-register" id="pelatihan-bumdes" name="pelatihan" required>
                        <option value="">Pilih pelatihan yang anda inginkan</option>
                        @foreach ($trainings as $training)
                           <option data-id="{{ $training->id }}" value="{{ $training->title }}">{{ $training->title }}</option>
                        @endforeach
                     </select>
                     <div class="invalid-feedback invalid-pelatihan"></div>
                  </div>

                  <div class="small my-3">
                     <label for="jadwal" class="form-label mb-1">Jadwal Pelatihan Tersedia</label>
                     <select class="form-select rounded-3 input-form-register" id="jadwal" name="jadwal" required>
                        <option value="">Pilih jadwal pelatihan</option>
                     </select>
                     <div class="invalid-feedback invalid-jadwal"></div>
                  </div>

                  <div class="small d-none my-3" id="element-tanggal">
                     <label for="jadwal" class="form-label mb-1">Tanggal Yang Diinginkan</label>
                     <input type="date" class="form-control rounded-3" id="tanggal" name="tanggal" required>
                     <div class="invalid-feedback invalid-tanggal"></div>
                  </div>

                  <div class="d-flex justify-content-end align-items-center mt-4">
                     <a href="{{ url('register-training') }}" class="btn btn-outline-secondary rounded-pill me-2 px-5">Sebelumnya</a>
                     <button type="submit" class="btn bg-green rounded-pill text-light px-5">Kirim</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-3">
            <div class="card card-body mt-4 p-4 shadow-sm" style="border-radius: 20px;">
               <p class="text-secondary m-0 p-0">Ringkasan Pelatihan</p>
               <h6 class="tema-pelatihan mt-2" style="font-weight: 600"></h6>
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

   <!-- Modal confirmation -->
   <div class="modal fade" id="modal-confirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title w-100 m-0 p-0 text-center" style="font-weight: 600">Daftar Pelatihan</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
               <p class="text-secondary">Apakah data yang anda masukan sudah benar?</p>
            </div>
            <div class="modal-footer border-0 bg-transparent">
               <button type="button" class="btn btn-outline-secondary rounded-3 py-2 px-5" data-bs-dismiss="modal">Ubah</button>
               <button id="btn-submit" type="button" class="btn btn-lightgreen rounded-3 py-2 px-5" style="border: 1px solid #0EA44D">Ya, Benar</button>
            </div>
         </div>
      </div>
   </div>

   <!-- modal success -->
   <div class="modal fade" id="modal-success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-qris" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <div class="text-center">
                  <img src="{{ asset('assets/home/img/berhasil.png') }}" alt="" class="img-fluid">
                  <h5 class="m-0 p-0" style="font-weight: 600">Pendaftaran berhasil</h5>
               </div>

               <div class="alert alert-secondary rounded-4 my-3" role="alert">
                  <p class="mb-2 p-0" style="font-weight: 500">Biaya Kontribusi bisa ditransfer melalui :</p>
                  <p class="small m-0 p-0">No.Rekening : 0951111914</p>
                  <p class="small m-0 p-0">Atas nama : PT MERAPI VISITAMA INDONESIA</p>
                  <p class="small m-0 p-0">Bank : BNI</p>
               </div>

               <div class="d-grid mt-4 gap-2 text-center">
                  <a href="{{ url('/') }}" role="button" class="btn-block text-decoration-none btn-lightgreen rounded-4 py-2 px-5">Kembali ke beranda</a>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('js')
   <script>
      // get schedule by training
      const selectTraining = document.querySelector('#pelatihan-bumdes')
      const selectSchedule = document.querySelector('#jadwal')
      selectTraining.addEventListener('change', function() {
         const training_id = this.options[this.selectedIndex].dataset.id
         const temaPelatihan = document.querySelector('.tema-pelatihan')

         if (!training_id) {
            selectSchedule.disabled = true
            return selectSchedule.innerHTML = '<option value="">Pilih jadwal pelatihan</option>'
         }

         fetch(`/schedule/${training_id}`, {
               method: 'GET'
            })
            .then(res => res.json())
            .then(data => {
               temaPelatihan.innerHTML = this.value

               selectSchedule.disabled = false
               selectSchedule.innerHTML = '<option value="">Pilih jadwal pelatihan</option>'
               data.forEach(schedule => {
                  selectSchedule.innerHTML +=
                     `<option data-id="${schedule.id}" value="${schedule.event_date}  - ${schedule.event_time}">${schedule.event_date} - ${schedule.event_time}</option>`
               })
               selectSchedule.innerHTML += '<option value="Lainnya">Lain-lain</option>'
            })
      })

      // fill training summary with detail schedule
      selectSchedule.addEventListener('change', function() {
         const date = document.querySelector('#date')
         const time = document.querySelector('#time')
         const location = document.querySelector('#location')
         const elTanggal = document.querySelector('#element-tanggal')

         if (this.value == 'Lainnya') {
            elTanggal.classList.remove('d-none')
         } else {
            elTanggal.classList.add('d-none')
            const schedule_id = this.options[this.selectedIndex].dataset.id
            fetch(`/get-schedule/${schedule_id}`, {
                  method: 'GET'
               })
               .then(res => res.json())
               .then(data => {
                  date.innerHTML = data.event_date
                  time.innerHTML = `(${data.event_duration}) ` + data.event_time
                  location.innerHTML = data.location
               })
         }

      })

      // clear select schedule if select training not selected
      if (!selectTraining.value) {
         selectSchedule.disabled = true
         selectSchedule.innerHTML = '<option value="">Pilih jadwal pelatihan</option>'
      }

      // submit form register
      const formRegister = document.querySelector('#form-submit-register-training')
      formRegister.addEventListener('submit', function(e) {
         e.preventDefault()

         const confirm = new bootstrap.Modal(document.getElementById('modal-confirm'))
         const success = new bootstrap.Modal(document.getElementById('modal-success'))
         const btnSubmit = document.querySelector('#btn-submit')
         confirm.show()
         btnSubmit.addEventListener('click', () => {
            confirm.hide()

            // clear invalid message
            const inputForms = document.querySelectorAll('.input-form-register')
            inputForms.forEach(input => input.classList.remove('is-invalid'))

            const formData = new FormData(this)
            fetch('register-training/submit', {
                  method: 'POST',
                  body: formData
               })
               .then(res => res.json())
               .then(data => {
                  // error invalid
                  if (data.invalid) {
                     return errorValidation(data.invalid)
                  }

                  success.show()
                  formRegister.reset()
               })
         })
      })

      const errorValidation = (invalid) => {
         const inpOpsi = document.querySelectorAll('input[name="opsi"]')
         const inpPelatihan = document.querySelector('select[name="pelatihan"]')
         const inpJadwal = document.querySelector('select[name="jadwal"]')
         const inpTanggal = document.querySelector('input[name="tanggal"]')

         const invOpsi = document.querySelector('.invalid-opsi')
         const invPelatihan = document.querySelector('.invalid-pelatihan')
         const invJadwal = document.querySelector('.invalid-jadwal')
         const invTanggal = document.querySelector('.invalid-tanggal')

         if (invalid.opsi) {
            inpOpsi.forEach(opsi => opsi.classList.add('is-invalid'))
            invOpsi.innerHTML = invalid.opsi
         }

         if (invalid.pelatihan) {
            inpPelatihan.classList.add('is-invalid')
            invPelatihan.innerHTML = invalid.pelatihan
         }

         if (invalid.jadwal) {
            inpJadwal.classList.add('is-invalid')
            invJadwal.innerHTML = invalid.jadwal
         }

         if (invalid.tanggal) {
            inpTanggal.classList.add('is-invalid')
            invTanggal.innerHTML = invalid.tanggal
         }

      }
   </script>
@endsection
