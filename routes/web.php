<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\sendMailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/support-uid', function () {
    return view('layouts.support');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/key', function () {
    return view('layouts.key');
});

Route::get('/engineering', function () {
    return view('services.engineering');
});

Route::get('/procurement', function () {
    return view('services.procurement');
});

Route::get('/construction', function () {
    return view('services.construction');
});

Route::get('/others', function () {
    return view('services.others');
});

Route::get('/experience', function () {
    return view('proyek.experience');
});

Route::prefix('pictures')->group(function () {
    Route::get('/', function () {
        return view('proyek.pictures.pictures');
    });

    Route::get('/electrical', function () {
        return view('proyek.pictures.electrical');
    });

    Route::get('/atmospheric', function () {
        return view('proyek.pictures.atmospheric');
    });

    Route::get('/double', function () {
        return view('proyek.pictures.double');
    });

    Route::get('/steel', function () {
        return view('proyek.pictures.steel');
    });

    Route::get('/sandlasting', function () {
        return view('proyek.pictures.sandlasting');
    });

    Route::get('/piping', function () {
        return view('proyek.pictures.piping');
    });
});

Route::get('/clients', function () {
    return view('clients.clients');
});

Route::get('/company', function () {
    return view('ourcompany.company');
});

Route::get('/iso-9001-2015-ym-teknik', function () {
    return view('certificate.certificate1');
});

Route::get('/iso-45001-2018-ym-teknik', function () {
    return view('certificate.certificate2');
});

Route::get('/iso-14001-2015-ym-teknik', function () {
    return view('certificate.certificate3');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/mail', [sendMailController::class, 'index']);
Route::post('/send-mail', [sendMailController::class, 'index']);

// Route::get('/news', function () {
//     return view('news.news');
// });

Route::prefix('news')->group(function () {
    Route::get('/', function () {
        return view('news.news');
    });

    Route::get('/lpg-cilacap-spherical-tank-3000mt-construction', function () {
        return view('news.subnews1');
    });
});


Route::get('/tes', function () {
    return view('index');
});
Route::get('/visi', function () {
    return view('layouts.visi');
});

Route::get('/policy', function () {
    return view('layouts.policy');
});

Route::get('/penghargaan', function () {
    return view('layouts.penghargaan');
});

Route::get('/izin', function () {
    return view('layouts.izin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
