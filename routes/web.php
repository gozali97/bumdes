<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use League\CommonMark\Node\Block\Document;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AkunTerdaftarController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\RegisterTrainingController;

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

Route::get('/', function () {
    // get artikel blog
    $response = Http::get('https://blog.talentahub.id/wp-json/wp/v2/posts');
    $articles = json_decode($response, true);

    return view('homepage.index', [
        'articles' => $articles
    ]);
});

//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/proses-login', [AuthController::class, 'proses_login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//lupa password
Route::get('/lupa-password', [AuthController::class, 'lupa_password'])->name('lupa_password');
Route::post('/proses-lupapassword', [AuthController::class, 'proses_lupapassword']);
Route::get('/password-baru/{id}', [AuthController::class, 'password_baru'])->name('password_baru');
Route::post('/proses-password-baru/{id}', [AuthController::class, 'proses_password_baru']);
//register
Route::get('/daftar', [AuthController::class, 'index'])->name('daftar');
Route::post('/daftar/store', [AuthController::class, 'register'])->name('register');
Route::get('resend', [AuthController::class, 'resendOtp'])->name('resend');
Route::get('/verifikasi', [AuthController::class, 'verification'])->name('verification');
Route::post('/proses/verifikasi', [AuthController::class, 'proses_verification'])->name('proses_verification');
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
    // Route::group(['middleware' => ['login_check:1']], function () {
    //     Route::resource('admin', AdminController::class);
    // });
    // Route::group(['middleware' => ['login_check:2']], function () {
    //     Route::resource('admin', AdminController::class);
    // });
    // Route::group(['middleware' => ['login_check:3']], function () {
    //     Route::resource('admin', AdminController::class);
    // });
});

// route detail pelatihan
Route::get('training-of-trainer-pendamping-bumdes', function () {
    return view('pelatihan.training-of-trainers');
});

Route::get('penyusunan-laporan-keuangan-bumdes', function () {
    return view('pelatihan.laporan-keuangan');
});

Route::get('pelatihan-digital-marketing-bumdes', function () {
    return view('pelatihan.digital-marketing');
});

Route::get('pelatihan-tata-kelola-manajemen-bumdes', function () {
    return view('pelatihan.manajemen-bumdes');
});

Route::get('pelatihan-revitalisasi-bumdes', function () {
    return view('pelatihan.revitalisasi-bumdes');
});

Route::get('pelatihan-penyususan-sop-unit-usaha-bumdes', function () {
    return view('pelatihan.sop-unit-usaha-bumdes');
});

Route::get('pelatihan-kunjungan-sekolah-bumdes', function () {
    return view('pelatihan.kunjungan-sekolah-bumdes');
});

// route tentang bumdes
Route::get('about-us', function () {
    return view('about.index');
});

// route kontak
Route::get('contact-us', function () {
    return view('contact.index');
});

// route download
Route::get('download', [DocumentController::class, 'index']);
Route::get('download/{documents}', [DocumentController::class, 'download']);

// route event
Route::get('event', [EventController::class, 'index']);

// route layanan digital
Route::get('layanan-digital/cku', function () {
    return view('layanan-digital.cku');
});

Route::get('layanan-digital/halo-desa', function () {
    return view('layanan-digital.halo-desa');
});

Route::get('layanan-digital/saab', function () {
    return view('layanan-digital.saab');
});

Route::get('layanan-digital/tanya-bumdes', function () {
    return view('layanan-digital.tanya-bumdes');
});

// route pendampingan
Route::get('pendampingan/tata-kelola-kelembagaan-bumdes', function () {
    return view('pendampingan.tata-kelola-kelembagaan-bumdes');
});

Route::get('pendampingan/penyusunan-rencana-usaha-bumdes', function () {
    return view('pendampingan.penyusunan-rencana-usaha-bumdes');
});

Route::get('pendampingan/tata-kelola-manajemen-bumdes', function () {
    return view('pendampingan.tata-kelola-manajemen-bumdes');
});

Route::get('pendampingan/tata-kelola-keuangan-bumdes', function () {
    return view('pendampingan.tata-kelola-keuangan-bumdes');
});

Route::get('pendampingan/digitalisasi-bumdes', function () {
    return view('pendampingan.digitalisasi-bumdes');
});

// route pelatihan bumdes
Route::get('pelatihan-bumdes', function () {
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

    return view('detail-program.pelatihan-bumdes', [
        'sliders' => $sliders
    ]);
});

// route pendampingan bumdes
Route::get('pendampingan-bumdes', function () {
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

    return view('detail-program.pendampingan-bumdes', [
        'sliders' => $sliders
    ]);
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

    return view('detail-program.layanan-digital', [
        'sliders' => $sliders
    ]);
});

Route::controller(RegisterTrainingController::class)->group(function ($route) {
    $route->get('register-training', 'index');
    $route->post('register-training', 'proccess');
    $route->post('register-training/submit', 'submit');
    $route->get('city/{province_id}', 'getCityByProvince');
    $route->get('schedule/{training_id}', 'getScheduleByTraining');
    $route->get('get-schedule/{id}', 'getScheduleById');
});

// Route::get('merchandise', function () {
//     return view('merchandise.index');
// });
Route::get('/merch', [MerchandiseController::class, 'index'])->name('index');
Route::get('/showmerch/{id}', [MerchandiseController::class, 'details'])->name('details');

// Route::get('/admin', function () {
//     return view('admin.dashboard.index');
// });

// Route::get('/akun-terdaftar', function () {
//     return view('admin.akunterdaftar.index');
// });

// Route::get('/daftar-1', function () {
//     return view('authentikasi.register.step1');
// });

// Route::get('/daftar-2', function () {
//     return view('authentikasi.register.step2');
// });

// Route::get('/daftar-3', function () {
//     return view('authentikasi.register.step3');
// });

// Route::get('/daftar-4', function () {
//     return view('authentikasi.register.step4');
// });

// Route::get('/daftar-5', function () {
//     return view('authentikasi.register.step5');
// });

// Route::get('/daftar-6', function () {
//     return view('authentikasi.register.step6');
// });

// Route::get('/login', function () {
//     return view('authentikasi.login.login');
// });

// Route::get('/lupa-password', function () {
//     return view('authentikasi.lupapassword.lupa');
// });

// Route::get('/password-baru', function () {
//     return view('authentikasi.lupapassword.passwordbaru');
// });

// Route::get('/berhasil', function () {
//     return view('authentikasi.lupapassword.berhasil');
// });

// Route::get('/', function () {
//     return view('homepage.index');
// });

// Route::get('/login-admin', function () {
//     return view('admin.login.login');
// });
