<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunTerdaftarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryProgramController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CategoryMerchandiseController;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Mentorship\MentorshipController;
use App\Http\Controllers\Mentorship\DocumentMentorshipController;
use App\Http\Controllers\Mentorship\MentorshipMethodController;
use App\Http\Controllers\Mentorship\TeamController;
use App\Http\Controllers\Mentorship\AlumnaeController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\NewslatterController;
use App\Http\Controllers\RegisterTrainingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/pelatihan-bumdes', [HomepageController::class, 'training'])->name('pelatihan-bumdes');
Route::get('/pendampingan-bumdes', [HomepageController::class, 'mentorship'])->name('pendampingan-bumdes');
// Route::get('/training-of-trainer-pendamping-bumdes', [PelatihanController::class, 'training']);

Route::get('/pelatihan/detail/{slug}', [TrainingController::class, 'show'])->name('admin.training.show');
Route::get('/pendampingan/detail/{slug}', [MentorshipController::class, 'show'])->name('admin.mentorship.show');

Route::get('newslatter/download/{newslatter}', [NewslatterController::class, 'download'])->name('newslatter.download');

//frontend

// route tentang bumdes
Route::get('about-us', function () {
    return view('frontend.about.index');
});

// route kontak
Route::get('contact-us', function () {
    return view('frontend.contact.index');
});

// route download
Route::get('download', [ArchivesController::class, 'show']);
Route::get('download/{archives}', [ArchivesController::class, 'download']);

// route event
Route::get('event', [EventController::class, 'show']);

// route layanan digital
Route::get('layanan-digital/cku', function () {
    return view('frontend.layanan-digital.cku');
});
Route::get('layanan-digital/halo-desa', function () {
    return view('frontend.layanan-digital.halo-desa');
});

Route::get('layanan-digital/saab', function () {
    return view('frontend.layanan-digital.saab');
});

Route::get('layanan-digital/tanya-bumdes', function () {
    return view('frontend.layanan-digital.tanya-bumdes');
});

Route::controller(RegisterTrainingController::class)->group(function ($route) {
    $route->get('register-training', 'index');
    $route->post('register-training', 'proccess');
    $route->post('register-training/submit', 'submit')->name('kirim');
    $route->get('city/{province_id}', 'getCityByProvince');
    $route->get('schedule/{training_id}', 'getScheduleByTraining');
    $route->get('get-schedule/{id}', 'getScheduleById');
});

// route layanan digital
Route::get('layanan-digital', function () {
    $sliders = [
        [
            'nama' => 'Chandra Nurhaz',
            'job' => 'Nusatani Manager SURFAID Indonesia',
            'testimoni' => '“Pelatihan sangat relevan, dijalankan dengan metode yang fun selain teori juga berkunjung ke Bumdes memperkaya metode pelatihan“',
            'image' => 'img-chandra.png'
        ],
        [
            'nama' => 'Muhammad Faza Muzakki',
            'job' => 'Sekretaris Desa Guwosari',
            'testimoni' => '“Pengalaman mengikuti training sangat banyak sekali mendapatkan ilmu yang beguna untuk di praktekan untuk BUM Desa“',
            'image' => 'img-faza.png'
        ],
        [
            'nama' => 'Imam Nawawi',
            'job' => 'BUM Desa Guwosari Maju',
            'testimoni' => '“Setelah mengikuti program saya banyak belajar mengenai keperngurusan bumdes dan melakukan sosialisasi UMKM“',
            'image' => 'img-bapak.png'
        ],
        [
            'nama' => 'Imam',
            'job' => 'BUM Desa Guwosari Maju',
            'testimoni' => '“Setelah mengikuti program saya banyak belajar mengenai keperngurusan bumdes dan melakukan sosialisasi UMKM“',
            'image' => 'img-bapak.png'
        ]
    ];

    return view('frontend.detail-program.layanan-digital', [
        'sliders' => $sliders
    ]);
});


// Admin

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {

    Route::group(['prefix' => '/'], function () {
        Route::resource('/', AdminController::class);
        Route::get('/akun-terdaftar', [AkunTerdaftarController::class, 'index']);
        Route::get('/akun-terdaftar/{id}/lihat', [AkunTerdaftarController::class, 'lihat'])->name('color.update');
        Route::get('/akun-terdaftar/export', [AkunTerdaftarController::class, 'export']);

        Route::group(['prefix' => '/banner'], function () {
            Route::get('/', [BannerController::class, 'index'])->name('admin.banner');
            Route::get('/create', [BannerController::class, 'create'])->name('admin.banner.create');
            Route::post('/store', [BannerController::class, 'store'])->name('admin.banner.store');
            Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('admin.banner.edit');
            Route::post('/update/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
            Route::post('/delete/{id}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');
        });

        //Program
        Route::group(['prefix' => '/program'], function () {
            Route::get('/', [ProgramController::class, 'index'])->name('admin.program');
            Route::get('/create', [ProgramController::class, 'create'])->name('admin.program.create');
            Route::post('/store', [ProgramController::class, 'store'])->name('admin.program.store');
            Route::get('/edit/{id}', [ProgramController::class, 'edit'])->name('admin.program.edit');
            Route::post('/update/{id}', [ProgramController::class, 'update'])->name('admin.program.update');
            Route::post('/delete/{id}', [ProgramController::class, 'destroy'])->name('admin.program.destroy');

            // Program Category
            Route::group(['prefix' => '/category'], function () {
                Route::get('/', [CategoryProgramController::class, 'index'])->name('admin.program.category');
                Route::get('/create', [CategoryProgramController::class, 'create'])->name('admin.program.category.create');
                Route::post('/store', [CategoryProgramController::class, 'store'])->name('admin.program.category.store');
                Route::get('/edit/{id}', [CategoryProgramController::class, 'edit'])->name('admin.program.category.edit');
                Route::post('/update/{id}', [CategoryProgramController::class, 'update'])->name('admin.program.category.update');
                Route::post('/delete/{id}', [CategoryProgramController::class, 'destroy'])->name('admin.program.category.destroy');
            });
        });

        //Archive
        Route::group(['prefix' => '/arsip'], function () {
            Route::get('/', [ArchivesController::class, 'index'])->name('admin.archives');
            Route::get('/create', [ArchivesController::class, 'create'])->name('admin.archives.create');
            Route::post('/store', [ArchivesController::class, 'store'])->name('admin.archives.store');
            Route::get('/edit/{id}', [ArchivesController::class, 'edit'])->name('admin.archives.edit');
            Route::post('/update/{id}', [ArchivesController::class, 'update'])->name('admin.archives.update');
            Route::post('/delete/{id}', [ArchivesController::class, 'destroy'])->name('admin.archives.destroy');

            // Archives Category
            Route::group(['prefix' => '/kategori'], function () {
                Route::get('/', [ArchivesController::class, 'indexCategory'])->name('admin.archives.category');
                Route::get('/create', [ArchivesController::class, 'createCategory'])->name('admin.archives.category.create');
                Route::post('/store', [ArchivesController::class, 'storeCategory'])->name('admin.archives.category.store');
                Route::get('/edit/{id}', [ArchivesController::class, 'editCategory'])->name('admin.archives.category.edit');
                Route::post('/update/{id}', [ArchivesController::class, 'updateCategory'])->name('admin.archives.category.update');
                Route::post('/delete/{id}', [ArchivesController::class, 'destroyCategory'])->name('admin.archives.category.destroy');
            });
        });

        //Event
        Route::group(['prefix' => '/agenda'], function () {
            Route::get('/', [EventController::class, 'index'])->name('admin.event');
            Route::get('/create', [EventController::class, 'create'])->name('admin.event.create');
            Route::post('/store', [EventController::class, 'store'])->name('admin.event.store');
            Route::get('/edit/{id}', [EventController::class, 'edit'])->name('admin.event.edit');
            Route::post('/update/{id}', [EventController::class, 'update'])->name('admin.event.update');
            Route::post('/delete/{id}', [EventController::class, 'destroy'])->name('admin.event.destroy');
        });

        //Newslatter
        Route::group(['prefix' => '/newslatter'], function () {
            Route::get('/', [NewslatterController::class, 'index'])->name('admin.newslatter');
            Route::get('/create', [NewslatterController::class, 'create'])->name('admin.newslatter.create');
            Route::post('/store', [NewslatterController::class, 'store'])->name('admin.newslatter.store');
            Route::get('/edit/{id}', [NewslatterController::class, 'edit'])->name('admin.newslatter.edit');
            Route::post('/update/{id}', [NewslatterController::class, 'update'])->name('admin.newslatter.update');
            Route::post('/delete/{id}', [NewslatterController::class, 'destroy'])->name('admin.newslatter.destroy');
        });

        //Kategori Merchandise
        Route::group(['prefix' => '/category'], function () {
            Route::get('/', [CategoryMerchandiseController::class, 'index'])->name('admin.category');
            Route::get('/create', [CategoryMerchandiseController::class, 'create'])->name('admin.category.create');
            Route::post('/input', [CategoryMerchandiseController::class, 'input'])->name('admin.category.input');
            Route::get('/edit/{id}', [CategoryMerchandiseController::class, 'edit'])->name('admin.category.edit');
            Route::post('/update/{id}', [CategoryMerchandiseController::class, 'update'])->name('admin.category.update');
            Route::post('/delete/{id}', [CategoryMerchandiseController::class, 'destroy'])->name('admin.category.destroy');
        });

        //Merchandise
        Route::group(['prefix' => '/merch'], function () {
            Route::get('/', [MerchandiseController::class, 'index'])->name('admin.merch');
            Route::get('/create', [MerchandiseController::class, 'create'])->name('admin.merch.create');
            Route::post('/store', [MerchandiseController::class, 'store'])->name('admin.merch.store');
            Route::get('/edit/{id}', [MerchandiseController::class, 'edit'])->name('admin.merch.edit');
            Route::post('/update/{id}', [MerchandiseController::class, 'update'])->name('admin.merch.update');
            Route::post('/delete/{id}', [MerchandiseController::class, 'destroy'])->name('admin.merch.destroy');
        });

        //Training
        Route::group(['prefix' => '/pelatihan'], function () {
            Route::get('/', [TrainingController::class, 'index'])->name('admin.training');
            Route::get('/pendaftar', [RegisterTrainingController::class, 'dashboard'])->name('admin.training.dashboard');
            Route::get('/create', [TrainingController::class, 'create'])->name('admin.training.create');
            Route::post('/store', [TrainingController::class, 'store'])->name('admin.training.store');

            Route::get('/edit/{id}', [TrainingController::class, 'edit'])->name('admin.training.edit');
            Route::post('/update/{id}', [TrainingController::class, 'update'])->name('admin.training.update');
            Route::post('/delete/{id}', [TrainingController::class, 'destroy'])->name('admin.training.destroy');

            Route::group(['prefix' => '/fasilitas'], function () {
                Route::get('/', [FacilityController::class, 'index'])->name('admin.training.facility');
                Route::get('/create', [FacilityController::class, 'create'])->name('admin.training.facility.create');
                Route::post('/store', [FacilityController::class, 'store'])->name('admin.training.facility.store');
                Route::get('/edit/{id}', [FacilityController::class, 'edit'])->name('admin.training.facility.edit');
                Route::post('/update/{id}', [FacilityController::class, 'update'])->name('admin.training.facility.update');
                Route::post('/delete/{id}', [FacilityController::class, 'destroy'])->name('admin.training.facility.destroy');
            });

            Route::group(['prefix' => '/materi'], function () {
                Route::get('/', [MaterialController::class, 'index'])->name('admin.training.material');
                Route::get('/create', [MaterialController::class, 'create'])->name('admin.training.material.create');
                Route::post('/store', [MaterialController::class, 'store'])->name('admin.training.material.store');
                Route::get('/edit/{id}', [MaterialController::class, 'edit'])->name('admin.training.material.edit');
                Route::post('/update/{id}', [MaterialController::class, 'update'])->name('admin.training.material.update');
                Route::post('/delete/{id}', [MaterialController::class, 'destroy'])->name('admin.training.material.destroy');
            });

            Route::group(['prefix' => '/pemateri'], function () {
                Route::get('/', [TrainerController::class, 'index'])->name('admin.training.trainer');
                Route::get('/create', [TrainerController::class, 'create'])->name('admin.training.trainer.create');
                Route::post('/store', [TrainerController::class, 'store'])->name('admin.training.trainer.store');
                Route::get('/edit/{id}', [TrainerController::class, 'edit'])->name('admin.training.trainer.edit');
                Route::post('/update/{id}', [TrainerController::class, 'update'])->name('admin.training.trainer.update');
                Route::post('/delete/{id}', [TrainerController::class, 'destroy'])->name('admin.training.trainer.destroy');
            });

            Route::group(['prefix' => '/jadwal'], function () {
                Route::get('/', [ScheduleController::class, 'index'])->name('admin.training.schedule');
                Route::get('/create', [ScheduleController::class, 'create'])->name('admin.training.schedule.create');
                Route::post('/store', [ScheduleController::class, 'store'])->name('admin.training.schedule.store');
                Route::get('/edit/{id}', [ScheduleController::class, 'edit'])->name('admin.training.schedule.edit');
                Route::post('/update/{id}', [ScheduleController::class, 'update'])->name('admin.training.schedule.update');
                Route::post('/delete/{id}', [ScheduleController::class, 'destroy'])->name('admin.training.schedule.destroy');
            });


            Route::group(['prefix' => '/testimoni'], function () {
                Route::get('/', [TestimonialController::class, 'index'])->name('admin.training.testimonial');
                Route::get('/create', [TestimonialController::class, 'create'])->name('admin.training.testimonial.create');
                Route::post('/store', [TestimonialController::class, 'store'])->name('admin.training.testimonial.store');
                Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.training.testimonial.edit');
                Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('admin.training.testimonial.update');
                Route::post('/delete/{id}', [TestimonialController::class, 'destroy'])->name('admin.training.testimonial.destroy');
            });
        });

        // Mentorship
        Route::group(['prefix' => '/pendampingan'], function () {
            Route::get('/', [MentorshipController::class, 'index'])->name('admin.mentorship');
            Route::get('/create', [MentorshipController::class, 'create'])->name('admin.mentorship.create');
            Route::post('/store', [MentorshipController::class, 'store'])->name('admin.mentorship.store');
            Route::get('/edit/{id}', [MentorshipController::class, 'edit'])->name('admin.mentorship.edit');
            Route::post('/update/{id}', [MentorshipController::class, 'update'])->name('admin.mentorship.update');
            Route::post('/delete/{id}', [MentorshipController::class, 'destroy'])->name('admin.mentorship.destroy');

            Route::group(['prefix' => '/dokumen'], function () {
                Route::get('/', [DocumentMentorshipController::class, 'index'])->name('admin.mentorship.document');
                Route::get('/create', [DocumentMentorshipController::class, 'create'])->name('admin.mentorship.document.create');
                Route::post('/store', [DocumentMentorshipController::class, 'store'])->name('admin.mentorship.document.store');
                Route::get('/edit/{id}', [DocumentMentorshipController::class, 'edit'])->name('admin.mentorship.document.edit');
                Route::post('/update/{id}', [DocumentMentorshipController::class, 'update'])->name('admin.mentorship.document.update');
                Route::post('/delete/{id}', [DocumentMentorshipController::class, 'destroy'])->name('admin.mentorship.document.destroy');
            });

            Route::group(['prefix' => '/metode'], function () {
                Route::get('/', [MentorshipMethodController::class, 'index'])->name('admin.mentorship.method');
                Route::get('/create', [MentorshipMethodController::class, 'create'])->name('admin.mentorship.method.create');
                Route::post('/store', [MentorshipMethodController::class, 'store'])->name('admin.mentorship.method.store');
                Route::get('/edit/{id}', [MentorshipMethodController::class, 'edit'])->name('admin.mentorship.method.edit');
                Route::post('/update/{id}', [MentorshipMethodController::class, 'update'])->name('admin.mentorship.method.update');
                Route::post('/delete/{id}', [MentorshipMethodController::class, 'destroy'])->name('admin.mentorship.method.destroy');
            });

            Route::group(['prefix' => '/tim-pendamping'], function () {
                Route::get('/', [TeamController::class, 'index'])->name('admin.mentorship.team');
                Route::get('/create', [TeamController::class, 'create'])->name('admin.mentorship.team.create');
                Route::post('/store', [TeamController::class, 'store'])->name('admin.mentorship.team.store');
                Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('admin.mentorship.team.edit');
                Route::post('/update/{id}', [TeamController::class, 'update'])->name('admin.mentorship.team.update');
                Route::post('/delete/{id}', [TeamController::class, 'destroy'])->name('admin.mentorship.team.destroy');
            });

            Route::group(['prefix' => '/testimoni'], function () {
                Route::get('/', [AlumnaeController::class, 'index'])->name('admin.mentorship.alumnae');
                Route::get('/create', [AlumnaeController::class, 'create'])->name('admin.mentorship.alumnae.create');
                Route::post('/store', [AlumnaeController::class, 'store'])->name('admin.mentorship.alumnae.store');
                Route::get('/edit/{id}', [AlumnaeController::class, 'edit'])->name('admin.mentorship.alumnae.edit');
                Route::post('/update/{id}', [AlumnaeController::class, 'update'])->name('admin.mentorship.alumnae.update');
                Route::post('/delete/{id}', [AlumnaeController::class, 'destroy'])->name('admin.mentorship.alumnae.destroy');
            });
        });
    });
});

//auth
//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/proses-login', [AuthController::class, 'proses_login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//lupa password
Route::get('/lupa-password', [AuthController::class, 'lupa_password'])->name('lupa_password');
Route::post('/proses-lupapassword', [AuthController::class, 'proses_lupapassword']);
Route::get('/password-baru/{id}', [AuthController::class, 'password_baru'])->name('password_baru');
Route::post('/proses-password-baru/{id}', [AuthController::class, 'proses_password_baru']);
//register
Route::get('/daftar', [AuthController::class, 'index'])->name('daftar');
Route::post('/daftar/store', [AuthController::class, 'register'])->name('register');
Route::get('/resend', [AuthController::class, 'resendOtp'])->name('resend');
Route::get('/verifikasi', [AuthController::class, 'verification'])->name('verification');
Route::post('/proses/verifikasi', [AuthController::class, 'prosesVerification'])->name('prosesVerification');
Route::get('/profil-satu', [AuthController::class, 'profil_satu'])->name('profil_satu');
Route::post('/proses/profilsatu', [AuthController::class, 'proses_profilsatu'])->name('proses_profilsatu');
Route::get('/profil-dua', [AuthController::class, 'profil_dua'])->name('profil_dua');
Route::get('/cities/{id}', [AuthController::class, 'get_kota']);
Route::post('/proses/profildua', [AuthController::class, 'proses_profildua'])->name('proses_profildua');
Route::get('/profil-tiga', [AuthController::class, 'profil_tiga'])->name('profil_tiga');
Route::post('/proses/profiltiga', [AuthController::class, 'proses_profiltiga'])->name('proses_profiltiga');
Route::get('/selesai', [AuthController::class, 'selesai'])->name('selesai');

Route::get('/login-admin', [AuthController::class, 'login_admin'])->name('login_admin');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['login_check:0']], function () {
        Route::resource('admin', AdminController::class);
        Route::get('/akun-terdaftar', [AkunTerdaftarController::class, 'index']);
        Route::get('/akun-terdaftar/{id}/lihat', [AkunTerdaftarController::class, 'lihat'])->name('color.update');
        Route::get('/akun-terdaftar/export', [AkunTerdaftarController::class, 'export']);
    });
});

Route::get('/merch', [MerchController::class, 'index'])->name('index');
Route::get('/showmerch/{id}', [MerchController::class, 'details'])->name('details');
